<?php
require_once("../processes/in.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Blogs</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="blogs" class="unscrollable_body">
        <div class="container">
            <section class="sticky_header_container">
                <div id="header">
                    <h1>All Blogs</h1>
                </div>

                <div id="blogs_container">
                    <?php
                    require_once("../processes/blogs.php");
                    ?>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Author: <span>Cyxteen</span>
                            </div>
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="likeBtn">Like</button>
                            <button class="viewAuthorBtn"><a href="./author.php?author_id=">View Author</a></button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Author: <span>Cyxteen</span>
                            </div>
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="likeBtn">Like</button>
                            <button class="viewAuthorBtn"><a href="./author.php?author_id=">View Author</a></button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Author: <span>Cyxteen</span>
                            </div>
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="likeBtn">Like</button>
                            <button class="viewAuthorBtn"><a href="./author.php?author_id=">View Author</a></button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Author: <span>Cyxteen</span>
                            </div>
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="likeBtn">Like</button>
                            <button class="viewAuthorBtn"><a href="./author.php?author_id=">View Author</a></button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Author: <span>Cyxteen</span>
                            </div>
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="likeBtn">Like</button>
                            <button class="viewAuthorBtn"><a href="./author.php?author_id=">View Author</a></button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
<script src="./JsController/bloghandler.js"></script>
</html>