<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nostrum velit vero aliquid, corporis impedit optio. Vero sequi veritatis dolores tenetur vitae esse et, qui nisi impedit cum modi fugit?
      Qui delectus obcaecati nisi. Doloremque iste, voluptas nulla neque voluptates magni soluta quo maiores eligendi suscipit culpa et ut explicabo aspernatur! Culpa, quas in voluptates debitis quos quo sint atque.
      Quia laboriosam ad exercitationem, nihil vero dolorum dignissimos. Doloribus alias voluptas atque aliquam exercitationem et pariatur, a amet ut asperiores provident nobis deleniti esse id consectetur. Possimus ad tempore incidunt?
      Magni doloribus quia veniam tenetur rem, sequi amet. Est distinctio illum voluptatum autem, vel accusantium mollitia vero fuga tenetur necessitatibus officiis eum pariatur ducimus? Necessitatibus praesentium obcaecati pariatur voluptate voluptatem.
      Illum a aliquam in excepturi minima minus soluta nam quae, veritatis, unde ut recusandae sunt quo! Mollitia eum sapiente asperiores enim nostrum assumenda debitis qui quisquam dignissimos aut. Cumque, necessitatibus.
    </p>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nostrum velit vero aliquid, corporis impedit optio. Vero sequi veritatis dolores tenetur vitae esse et, qui nisi impedit cum modi fugit?
      Qui delectus obcaecati nisi. Doloremque iste, voluptas nulla neque voluptates magni soluta quo maiores eligendi suscipit culpa et ut explicabo aspernatur! Culpa, quas in voluptates debitis quos quo sint atque.
      Quia laboriosam ad exercitationem, nihil vero dolorum dignissimos. Doloribus alias voluptas atque aliquam exercitationem et pariatur, a amet ut asperiores provident nobis deleniti esse id consectetur. Possimus ad tempore incidunt?
      Magni doloribus quia veniam tenetur rem, sequi amet. Est distinctio illum voluptatum autem, vel accusantium mollitia vero fuga tenetur necessitatibus officiis eum pariatur ducimus? Necessitatibus praesentium obcaecati pariatur voluptate voluptatem.
      Illum a aliquam in excepturi minima minus soluta nam quae, veritatis, unde ut recusandae sunt quo! Mollitia eum sapiente asperiores enim nostrum assumenda debitis qui quisquam dignissimos aut. Cumque, necessitatibus.
    </p>
  </div>
  <aside id="nav-containver">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"> <?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"> <?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>

<?php
include_once("templates/footer.php");
?>