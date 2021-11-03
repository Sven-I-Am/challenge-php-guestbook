<div class="row" id="main">
<div class="col" id="form">
    <form method="post">
        <div class="form-row">
            <label for="title">Title of your post</label>
            <input type="text" name="title" id="title" class="form-control"placeholder="Hello">
        </div>
        <div class="form-row">
            <label for="message">What do you want to say?</label>
            <textarea name="message" id="message" class="form-control" placeholder="How are you today?"></textarea>
        </div>
        <div class="form-row">
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Your name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="col" id="overview">
    <div id="messages">
        <span id="showTitle">Title</span>
        <span id="showMessage">Message</span>
        <span id="showName">Name</span>
    </div>
</div>
</div>

