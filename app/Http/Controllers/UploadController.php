<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    function upload(string $name)
    {
        $files = request()->file("file");
        DB::beginTransaction();
        $id_array = DB::select("SELECT (id) FROM user WHERE username = :name", ["name" => $name]);
        if (count($id_array) === 0) {
            return redirect()->route('err_page')->with(["msg" => "User {$name} was not found."]);
        }
        if (count($id_array) > 1) {
            return redirect()->route('err_page')->with(["msg" => "BUG: duplicate name found for: {$name}"]);
        }
        if ($files === null) {
            return redirect()->route('err_page')->with(["msg" => "No files selected"]);
        }
        $id = array_pop($id_array)->id;
        foreach ($files as $file) {
            $generated_id = Storage::disk('jda')->putFile('', $file);
            $current_time = date('Y-m-d H:i:s');
            $image_path = 'jda/' . $generated_id;
            if ($generated_id === false) {
                DB::rollBack();
                return redirect()->route('err_page')->with(["msg" => "Upload failed."]);
            }
            DB::insert("INSERT INTO illustration(
                user_id,
                title,
                timestamp,
                source,
                generated_unique_name,
                category
            ) VALUES(
                :user_id,
                :title,
                :timestamp,
                :source,
                :generated_unique_name,
                :category
            )", ["user_id" => $id, "title" => $generated_id, "timestamp" => $current_time, "source" => $image_path, "generated_unique_name" => $generated_id, "category" => "image"]);
        }
        DB::commit();
        return redirect()->route("home");
    }
}
