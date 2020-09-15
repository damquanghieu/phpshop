<?php

/**
 *
 */
trait TraitUploadMultipleFile
{
    public function traitCheckMoveMultipleFile($imageDetails)
    {
        $count = count($imageDetails['name']);
        $arr = [];
        // print_r($data);
        // die();

        for ($i = 0; $i < $count; $i++) {
            $tmp_dir = "Public/product_image_detail/";
            $newNameFile = mt_rand() . "_" . basename($imageDetails['name'][$i]);
            $tmp_file = $tmp_dir . $newNameFile;
            // var_dump($tmp_file);
            // die;
            $allowUpload = true;

            $imageFileType = pathinfo($tmp_file, PATHINFO_EXTENSION);
            $allowFileType = ['jpg', 'png', 'jpeg'];

            $checkFile = getimagesize($imageDetails["tmp_name"][$i]);

            if ($checkFile) {
                $allowUpload = true;
            } else {
                $allowUpload = false;
            }
            if (in_array($imageFileType, $allowFileType)) {
                $allowUpload = true;
            } else {
                $allowUpload = false;
            }

            if ($allowUpload) {
                // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
                // var_dump($_FILE["image"]["tmp_name"]);
                // die;
                if (move_uploaded_file($imageDetails["tmp_name"][$i], $tmp_file)) {
                    $arr[] = ['path' => $tmp_file];
                } else {
                    echo "Có lỗi xảy ra khi upload file.";
                    die;
                }
            } else {
                echo "Không upload được file, kiểu file không đúng ...";
                die;
            }
        }
        return $arr;
    }
}
