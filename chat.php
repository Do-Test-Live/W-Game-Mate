<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
$gamer = 0;
if (isset($_GET['rid'])) {
    if ($_SESSION['role'] == 'gamer') {
        $gamer = 1;
        $rid = 'u-' . $_GET['rid'];
    } else {
        $rid = 'g-' . $_GET['rid'];
    }
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
                    if ($gamer == '0') {
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
                            if ($gamer == '0') {
                                $f_receiver = $db_handle->runQuery("SELECT * FROM gamer WHERE id = '$id'");
                                if (!empty($f_receiver)) {
                                    ?>
                                    <div class="user-chat"
                                         onclick="window.location.href = 'chat.php?rid=<?php echo $f_receiver[0]['id']; ?>'">
                                        <div class="user-chat-img">
                                            <img src="<?php echo $img[0]; ?>"
                                                 alt="">
                                        </div>

                                        <div class="user-chat-text">
                                            <p class="mt-0 mb-0"><strong><?php
                                                    echo $f_receiver[0]['full_name_cn'];
                                                    ?></strong></p>
                                            <small><?php echo $fetch_chat_head[$i]['message']; ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                $f_receiver = $db_handle->runQuery("SELECT * FROM user WHERE id = '$id'");
                                ?>
                                <div class="user-chat"
                                     onclick="window.location.href = 'chat.php?rid=<?php echo $f_receiver[0]['id']; ?>'">
                                    <div class="user-chat-img">
                                        <img src="assets/images/14044.jpg"
                                             alt="">
                                    </div>

                                    <div class="user-chat-text">
                                        <p class="mt-0 mb-0"><strong><?php
                                                echo $f_receiver[0]['first_name'] . ' ' . $f_receiver[0]['last_name'];
                                                ?></strong></p>
                                        <small><?php echo $fetch_chat_head[$i]['message']; ?></small>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="content-chat-message-user" data-username="Maria Dennis">
                <div class="head-chat-message-user">
                    <?php
                    if ($gamer == '0') {
                        $fetch_rec = $db_handle->runQuery("select * from gamer where id = {$_GET['rid']}");
                        $img = explode(',', $fetch_rec[0]['images'])
                        ?>
                        <img src="<?php echo $img[0]; ?>"
                             alt="">
                        <div class="message-user-profile pt-3">
                            <p class="mt-0 mb-0 text-white"><strong><?php echo $fetch_rec[0]['full_name_cn'] ?></strong>
                            </p>
                        </div>
                        <?php
                    } else{
                        $fetch_rec = $db_handle->runQuery("select * from user where id = {$_GET['rid']}");
                        ?>
                        <img src="assets/images/14044.jpg"
                             alt="">
                        <div class="message-user-profile pt-3">
                            <p class="mt-0 mb-0 text-white"><strong><?php echo $f_receiver[0]['first_name'] . ' ' . $f_receiver[0]['last_name'];?></strong>
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="body-chat-message-user" id="chat-area">

                </div>
                <form id="myForm">
                    <div class="footer-chat-message-user">
                        <div class="message-user-send">
                            <input type="text" placeholder="Aa" name="message" id="message-box" autocomplete="off"
                                   required>
                        </div>
                        <input type="hidden" value="<?php echo $chat_id ?>" name="sender">
                        <?php
                        if($gamer == '0'){
                            ?>
                            <input type="hidden" value="g-<?php echo $_GET['rid'] ?>" name="receiver">
                            <?php
                        } else{
                            ?>
                            <input type="hidden" value="u-<?php echo $_GET['rid'] ?>" name="receiver">
                            <?php
                        }
                        ?>
                        <button type="submit">
                            <i class="w-icon-long-arrow-right"></i>
                        </button>
                    </div>
                </form>
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
    var chatArea = $("#chat-area");

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
        var isScrolledToBottom = chatArea[0].scrollHeight - chatArea.scrollTop() === chatArea.outerHeight();

        $.ajax({
            url: 'fetch_messages.php',
            method: 'POST',
            data: {
                chat_id: '<?php echo $chat_id; ?>',
                rid: '<?php echo $rid; ?>'
            },
            dataType: 'json',
            success: function (data) {
                // Assuming 'data.messages' contains an array of new chat messages
                // Store the current scroll position before updating the chat
                var scrollTopBeforeUpdate = chatArea.scrollTop();

                // Clear the existing content of the chat area
                chatArea.empty();

                // Iterate through the new messages and append them to the chat area
                for (var i = 0; i < data.messages.length; i++) {
                    var message = data.messages[i];
                    var senderClass = message.sender_id === '<?php echo $chat_id; ?>' ? 'message-user-right' : 'message-user-left';
                    var textClass = message.sender_id === '<?php echo $chat_id; ?>' ? 'message-user-right-text' : 'message-user-left-text';

                    // Create a new message div and append it to the chat area
                    var messageDiv = $('<div class="' + senderClass + '">').append(
                        $('<div class="' + textClass + '">').append(
                            $('<strong>').text(message.message)
                        )
                    );

                    chatArea.append(messageDiv);
                }

                // Only scroll to the bottom if the user was already at the bottom before the update
                if (isScrolledToBottom) {
                    chatArea.scrollTop(chatArea[0].scrollHeight);
                } else {
                    // Restore the scroll position to where it was before the update
                    chatArea.scrollTop(scrollTopBeforeUpdate);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error fetching messages: " + error);
            }
        });
    }

    $(document).ready(function () {
        // Call fetchMessages initially
        fetchMessages();

        // Scroll to the bottom after initial messages are loaded
        $("#chat-area").scrollTop($("#chat-area")[0].scrollHeight);

        // Set up the regular interval for fetching messages
        setInterval(fetchMessages, 2000); // 3000 milliseconds = 3 seconds
    });


    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("myForm");

        form.addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent the default form submission

            const formData = new FormData(form);

            fetch("submit_message.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => {
                    if (response.ok) {
                        // Handle success here
                        let input = document.getElementById('message-box');
                        input.value = '';
                        // You can update the page or show a success message here
                    } else {
                        // Handle errors here
                        console.error("Form submission failed");
                    }
                })
                .catch((error) => {
                    // Handle network errors here
                    console.error("Network error:", error);
                });
        });
    });


</script>


</body>
</html>