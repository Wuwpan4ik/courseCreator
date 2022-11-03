<?php
    class FunnelController extends ACore {

        private function isUser($checkId)
        {
            return $_SESSION['user']['id'] == $checkId;
        }

        public function AddVideo() {
            if (is_null($_FILES['video_uploader'])) {
                return False;
            }
            $uid = $_SESSION['item_id'];
            $res = $this->m->db->query("SELECT * FROM `funnel` WHERE id = '$uid' ORDER BY `id` DESC LIMIT 1");
            $count_video = count($this->m->db->query("SELECT * FROM `funnel_content` WHERE funnel_id = ". $res[0]['id'])) + 1;

    //        if (!$this->isUser($res[0]['author_id'])) return False;

            move_uploaded_file($_FILES['video_uploader']['tmp_name'], "./uploads/funnel/".$uid."_".$res[0]['name']."/$count_video"."_".$_FILES['video_uploader']['name']);

            $path = "./uploads/funnel/$uid"."_".$res[0]['name']."/$count_video"."_".$_FILES['video_uploader']['name'];

            $this->m->db->execute("INSERT INTO funnel_content (`funnel_id`, `name`, `description`, `video`, `query_id`) VALUES ($uid,'Укажите заголовок','Укажите описание', '$path', $count_video)");

            return true;
        }

        public function DeleteVideo()
        {
            $item_id = $_SESSION['item_id'];
            $path_in_files = $this->m->db->query("SELECT `video` FROM `funnel_content` WHERE id = '$item_id'");

//            $author_id = $this->m->db->query("SELECT funnel.author_id FROM `funnel_content` AS content WHERE INNER JOIN `funnel` AS funnel ON (funnel.id = content.funnel_id AND content.id = '$item_id')");
//            if (!$this->isUser($author_id)) return False;

            $this->m->db->execute("DELETE FROM `funnel_content` WHERE `id` = '$item_id'");
            unlink($path_in_files[0]['video']);
            return True;
        }

        public function PopupSettings() {
            //Форма
            $id_video = $_SESSION['item_id'];
            $funnel = $this->m->db->query("SELECT * FROM funnel_content WHERE id = '$id_video'");
            if (!$this->isUser($funnel[0]['author_id'])) return False;

            $videoBtnHTML = [];
            $first_do = $_POST['first_do'];
            $second_do = $_POST['second_do'];
            $button_text = $_POST['button_text'];
            // Проверка ддлины
            if (strlen($button_text) == 0) {
                $button_text = null;
            }
            switch ($_POST['first_do']) {
                case "pay_form":
                case "form": {
                    if (isset($_POST['form_id-1'])) {
                        $form_input_1 = $_POST['form_id-1'];
                        $videoBtnHTML['first_do'][$first_do] = [$form_input_1];
                    }
                    if (isset($_POST['form_id-2'])) {
                        $form_input_2 = $_POST['form_id-2'];
                        $videoBtnHTML['first_do'][$first_do] = array_merge(array_values($videoBtnHTML['first_do'][$first_do]), [$form_input_2]);
                    }
                    if (isset($_POST['form_id-3'])) {
                        $form_input_3 = $_POST['form_id-3'];
                        $videoBtnHTML['first_do'][$first_do] = array_merge(array_values($videoBtnHTML['first_do'][$first_do]), [$form_input_3]);
                    }
                    break;
                }
                case "list": {
                    $videoBtnHTML['first_do']['list'] = true;
                    break;
                }
                case "link": {
                    if (isset($_POST['link-1'])) {
                        $videoBtnHTML['first_do']['link'] = $_POST['link-1'];
                    }
                    break;
                }
                case "next_lesson": {
                    $videoBtnHTML['first_do']['next_lesson'] = true;
                    break;
                }
            }
            if (isset($button_text)) {
                switch ($_POST['second_do']) {
                    case "pay_form":
                    case "form": {
                        if (isset($_POST['form_id-4'])) {
                            $form_input_1 = $_POST['form_id-4'];
                            $videoBtnHTML['second_do'][$second_do] = [$form_input_1];
                        }
                        if (isset($_POST['form_id-5'])) {
                            $form_input_2 = $_POST['form_id-5'];
                            $videoBtnHTML['second_do'][$second_do] = array_merge(array_values($videoBtnHTML['second_do'][$second_do]), [$form_input_2]);
                        }
                        if (isset($_POST['form_id-6'])) {
                            $form_input_3 = $_POST['form_id-6'];
                            $videoBtnHTML['second_do'][$second_do] = array_merge(array_values($videoBtnHTML['second_do'][$second_do]), [$form_input_3]);
                        }
                        break;
                    }
                    case "link": {
                        if (isset($_POST['link-2'])) {
                            $videoBtnHTML['second_do']['link'] = $_POST['link-2'];
                        }
                        break;
                    }
                    case 'list':
                    {
                        $videoBtnHTML['second_do']['list'] = true;
                        break;
                    }
                    case 'next_lesson': {
                        $videoBtnHTML['second_do']['next_lesson'] = true;
                        break;
                    }
                }
            }
            $videoBtnHTMLResult = json_encode($videoBtnHTML);
            $this->m->db->execute("UPDATE `funnel_content` SET `popup` = '$videoBtnHTMLResult', `button_text` = '$button_text'  WHERE id = '$id_video'");
            return True;
        }

        function get_content()
        {
            echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                </head>
                <body>
                    <script>
                        window.history.go(-1)
                    </script>
                </body>
                </html>';
        }

        function obr()
        {
        }
    }
