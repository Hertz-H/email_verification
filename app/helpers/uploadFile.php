<?php
namespace App\Helpers;

class UploadFile 
{
    public static function uploadFile( $file)
    {
        $path = public_path('file_uploads');

        if ( ! file_exists($path) ) {
            mkdir($path);
        }

        // $file = $request->file('logo');

        $fileName = uniqid() . '_' . trim($file);
        
        if(!$file->move($path, $fileName))
        {
            echo 'false';
        }

        return $fileName;
    }
}




















// class UploadFile{
//     public static function uploadFile(array $imageFile)
//     {
//         // check images direction
//         if (!is_dir(__DIR__ . 'assets/images')) {
//             mkdir(__DIR__ . 'assets/images');
//         }

//         if ($imageFile && $imageFile['tmp_name']) {
//             $image = explode('.', $imageFile['name']);
//             $imageExtension = end($image);

//             $imageName = uniqid(). "." . $imageExtension;
//             $imagePath =  __DIR__ . 'assets/images' . $imageName;

//             move_uploaded_file($imageFile['tmp_name'], $imagePath);

//             return $imageName;
//         }

//         return null;
//     }
// }
?>