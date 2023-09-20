<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
$my_id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Gamer Details - Game Mate</title>

    <?php include('include/css.php'); ?>
</head>

<body>
<div class="page-wrapper">
    <!-- Start of Header -->
    <?php include('include/header_inner.php'); ?>
    <!-- End of Header -->


    <!-- Start of Main -->
    <main class="main mb-10 mt-5 pb-1">
        <div class="content-chat mt-20">
            <div class="content-chat-user">
                <div class="head-search-chat">
                    <h4 class="text-center">Chat</h4>
                </div>

                <div class="search-user mt-30">
                    <input id="search-input" type="text" placeholder="Search..." name="search" class="search">
                    <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                </div>

                <div class="list-search-user-chat mt-20">
                    <?php
                    if ($_SESSION['role'] == 'user') {
                        $chat_id = 'u-' . $_SESSION['userid'];
                    } else {
                        $chat_id = 'g-' . $_SESSION['userid'];
                    }
                    $query = "SELECT c.* FROM chat c INNER JOIN ( SELECT receiver_id, MAX(id) AS max_id FROM chat WHERE sender_id = '$chat_id' GROUP BY receiver_id) subquery ON c.receiver_id = subquery.receiver_id AND c.id = subquery.max_id ORDER BY c.id DESC";
                    $fetch_chat_head = $db_handle->runQuery($query);
                    $fetch_chat_head_no = $db_handle->numRows($query);
                    for ($i = 0; $i < $fetch_chat_head_no; $i++) {
                        $r = $fetch_chat_head[$i]['receiver_id'];
                        $rec = explode('-', $r);

                        if (count($rec) > 1) {
                            $id = $rec[1]; // Get the portion after the hyphen

                            // Query the database using the extracted ID
                            $f_gamer = $db_handle->runQuery("SELECT * FROM gamer WHERE id = '$id'");

                            if (!empty($f_gamer)) {
                                $img = explode(',', $f_gamer[0]['images']); // Note: Use $f_gamer[0] to access the first row
                                ?>
                                <div class="user-chat" data-username="Maria Dennis">
                                    <div class="user-chat-img">
                                        <img src="<?php echo $img[0]; ?>"
                                             alt="">
                                    </div>

                                    <div class="user-chat-text">
                                        <p class="mt-0 mb-0"><strong><?php
                                                echo $f_gamer[0]['full_name_cn'];
                                                ?></strong></p>
                                        <small><?php echo $fetch_chat_head[$i]['message']; ?></small>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo 'Invalid receiver ID format'; // Handle the case where there's no hyphen
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="content-chat-message-user" data-username="Maria Dennis">
                <div class="head-chat-message-user">
                    <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                         alt="">
                    <div class="message-user-profile pt-3">
                        <p class="mt-0 mb-0 text-white"><strong><?php echo $f_gamer[0]['full_name_cn'] ?></strong></p>
                    </div>
                </div>
                <div class="body-chat-message-user">
                    <?php
                    $fetch_message = $db_handle->runQuery("select * from chat WHERE (sender_id = '$chat_id' || receiver_id = '$chat_id') AND (sender_id = '$r' || receiver_id = '$r') order by id desc;");
                    $fetch_message_no = $db_handle->numRows("select * from chat WHERE (sender_id = '$chat_id' || receiver_id = '$chat_id') AND (sender_id = '$r' || receiver_id = '$r') order by id desc;");
                    for ($j = 0; $j < $fetch_message_no; $j++) {
                        ?>
                        <div class="message-user-left">
                            <div class="message-user-left-text">
                                <strong><?php echo $fetch_message[$j]['message']; ?></strong>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="message-user-right">
                        <div class="message-user-right-img">
                            <p class="mt-0 mb-0"><strong>Luis Angel Solano Rivera</strong></p>
                            <small>mié 17:59</small>
                            <img src="https://images.pexels.com/photos/2117283/pexels-photo-2117283.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                 alt="">
                        </div>
                        <div class="message-user-right-text">
                            <strong>Hola, ¿Cómo estás?</strong>
                        </div>
                    </div>
                </div>
                <div class="footer-chat-message-user">
                    <div class="message-user-send">
                        <input type="text" placeholder="Aa">
                    </div>
                    <button type="button">
                        <i class="fa-solid fa-send-o"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
    <?php include('include/footer.php'); ?>
    <!-- End of Footer -->
</div>
<!-- End of Page Wrapper -->

<!-- Start of Scroll Top -->
<?php include('include/scrol_top.php'); ?>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<?php include('include/mobile.php'); ?>
<!-- End of Mobile Menu -->

<!-- Start of Newsletter popup -->
<?php include('include/newsletter.php'); ?>
<!-- End of Newsletter popup -->

<!-- Start of Quick View -->
<?php include('include/quick.php'); ?>
<!-- End of Quick view -->

<!-- Plugin JS File -->
<?php include('include/js.php'); ?>

<script>
    var track = document.getElementById('track');

    var controlBtn = document.getElementById('play-pause');

    function playPause() {
        if (track.paused) {
            track.play();
            //controlBtn.textContent = "Pause";
            controlBtn.className = "pause";
        } else {
            track.pause();
            //controlBtn.textContent = "Play";
            controlBtn.className = "play";
        }
    }

    controlBtn.addEventListener("click", playPause);
    track.addEventListener("ended", function () {
        controlBtn.className = "play";
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const userChats = document.querySelectorAll('.user-chat');
        const chatMessages = document.querySelectorAll('.content-chat-message-user');

        userChats.forEach((userChat) => {
            userChat.addEventListener('click', () => {
                const selectedUsername = userChat.getAttribute('data-username');

                chatMessages.forEach((chatMessage) => {
                    const messageUsername = chatMessage.getAttribute('data-username');

                    if (messageUsername === selectedUsername) {
                        chatMessage.classList.add('active');
                    } else {
                        chatMessage.classList.remove('active');
                    }
                });

                userChats.forEach((chat) => {
                    chat.classList.remove('active');
                });
                userChat.classList.add('active');
            });
        });

        // Activar el primer elemento user-chat inicialmente
        userChats[0].classList.add('active');
        chatMessages[0].classList.add('active');
    });
</script>
</body>
</html>