<?php

/**
 *
 */
trait TraitUploadSingleFile
{
    public function checkMoveFile($_FILE)
    {
        if ($_FILE['image']['error'] == 0) {

            $tmp_dir = "Public/product_image/";
            $newNameFile = mt_rand() . "_" . basename($_FILE['image']['name']);
            $tmp_file = $tmp_dir . $newNameFile;
            // var_dump($tmp_file);
            // die;
            $allowUpload = true;

            $imageFileType = pathinfo($tmp_file, PATHINFO_EXTENSION);
            $allowFileType = ['jpg', 'png', 'jpeg'];

            $checkFile = getimagesize($_FILE["image"]["tmp_name"]);

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
                if (move_uploaded_file($_FILE["image"]["tmp_name"], $tmp_file)) {
                    return $tmp_file;
                } else {
                    echo "Có lỗi xảy ra khi upload file.";
                    die;
                }
            } else {
                echo "Không upload được file, kiểu file không đúng ...";
                die;
            }
        }
    }
}
