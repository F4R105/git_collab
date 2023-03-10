<?php
require_once("../processes/in.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | User</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="user_main">
        <div class="container">
            <section id="user_dashboard">
                <div id="header">
                    <h1>Dashboard</h1>
                    <div id="information">
                        <div class="info no_of_blogs">
                            Number of blogs: <span>52</span>
                        </div>
                        <div class="info no_of_blogs">
                            Number of followers: <span>10</span>
                        </div>
                    </div>
                </div>

                <div id="blogs_container">
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="deleteBtn">Delete</button>
                            <button class="editBtn">Edit</button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="deleteBtn">Delete</button>
                            <button class="editBtn">Edit</button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="deleteBtn">Delete</button>
                            <button class="editBtn">Edit</button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="deleteBtn">Delete</button>
                            <button class="editBtn">Edit</button>
                        </div>
                    </div>
                    <div class="blog">
                        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam placeat laborum dolorem saepe. Quam.</h3>
                        <div class="blog_retension">
                            <div class="info number_of_likes">
                                Number of Likes: <span>150</span>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem voluptatibus, natus, reiciendis ex dicta totam aliquid iure repellendus unde velit molestias in laborum quos. Cupiditate dolore quibusdam labore modi repudiandae animi itaque ipsam quae accusantium aut, veniam perferendis id officiis nulla suscipit eius quas aspernatur? Velit eaque eos voluptas consequuntur.</p>
                        <div class="blog_buttons">
                            <button class="deleteBtn">Delete</button>
                            <button class="editBtn">Edit</button>
                        </div>
                    </div>
                </div>
            </section>
            <section id="best_authors_list">
                <h4>Best authors</h4>
                <div id="authors_container">
                    <div class="user">
                        <span>Faraji</span>
                    </div>
                    <div class="user">
                        <span>Massawe</span>
                    </div>
                    <div class="user">
                        <span>Hamisi</span>
                    </div>
                    <div class="user">
                        <span>Derek</span>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>