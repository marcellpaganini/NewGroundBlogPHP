<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.important {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>

<div style="margin-right:5%; margin-left:5%; margin-top:2%;">
    <h1 class="text-center">Welcome to the administration panel</h1>
    <hr>
    <br />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
            <img src="../images/blog.png" alt="posts" style="width:100%">
            <h1>Posts</h1>
            <p class="important">...</p>
            <p>...</p>
            <p><button>View Details</button></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
            <img src="../images/comments.png" alt="comments" style="width:100%">
            <h1>Comments</h1>
            <p class="important">...</p>
            <p>...</p>
            <p><button>View Details</button></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
            <img src="../images/users.png" alt="users" style="width:100%">
            <h1>Users</h1>
            <p class="important">...</p>
            <p>...</p>
            <p><button>View Details</button></p>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <img src="../images/categories.png" alt="categories" style="width:100%">
            <h1>Categories</h1>
            <p class="important">...</p>
            <p>...</p>
            <p><button>View Details</button></p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>
