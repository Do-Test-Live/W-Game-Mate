<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if(isset($_GET['rid'])){
   $rid = 'g-'.$_GET['rid'];
}
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
                                $img = explode(',', $f_gamer[0]['images']);
                                ?>
                                <div class="user-chat" onclick="window.location.href = 'chat.php?rid=<?php echo $f_gamer[0]['id'];?>'">
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
                    <?php
                    $fetch_rec = $db_handle->runQuery("select * from gamer where id = {$_GET['rid']}");
                    $img = explode(',',$fetch_rec[0]['images'])
                    ?>
                    <img src="<?php echo $img[0];?>"
                         alt="">
                    <div class="message-user-profile pt-3">
                        <p class="mt-0 mb-0 text-white"><strong><?php echo $fetch_rec[0]['full_name_cn'] ?></strong></p>
                    </div>
                </div>
                <div class="body-chat-message-user">
                    <?php
                    $fetch_message = $db_handle->runQuery("select * from chat WHERE (sender_id = '$chat_id' || receiver_id = '$chat_id') AND (sender_id = '$rid' || receiver_id = '$rid') order by id desc;");
                    $fetch_message_no = $db_handle->numRows("select * from chat WHERE (sender_id = '$chat_id' || receiver_id = '$chat_id') AND (sender_id = '$rid' || receiver_id = '$rid') order by id desc;");
                    for ($j = 0; $j < $fetch_message_no; $j++) {
                        ?>
                        <div class="<?php
                        if ($fetch_message[$j]['sender_id'] == $chat_id){
                            echo "message-user-right";
                        } else{
                            echo "message-user-left";
                        }
                        ?>">
                            <div class="<?php
                            if ($fetch_message[$j]['sender_id'] == $chat_id){
                                echo "message-user-right-text";
                            } else{
                                echo "message-user-left-text";
                            }
                            ?>">
                                <strong><?php echo $fetch_message[$j]['message']; ?></strong>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
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

    function fetchMessages() {
        $.ajax({
            url: 'fetch_messages.php', // The PHP script that fetches messages
            method: 'POST', // You can use POST or GET, depending on your implementation
            data: {
                chat_id: '<?php echo $chat_id; ?>', // Pass any necessary data to the server
                rid: '<?php echo $rid; ?>'
            },
            dataType: 'json',
            success: function(data) {
                console.log(data);
            },
            error: function(xhr, status, error) {
                console.error("Error fetching messages: " + error);
            }
        });
    }

    // Call fetchMessages every 3 seconds
    setInterval(fetchMessages, 3000); // 3000 milliseconds = 3 seconds
</script>
</body>
</html>