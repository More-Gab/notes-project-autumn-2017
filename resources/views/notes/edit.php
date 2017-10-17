<form action="" method="post">

    <div class="field">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($note->title); ?>">
    </div>

    <div class="field">
        <label>Text</label>
        <textarea name="text"><?php echo htmlspecialchars($note->text); ?></textarea>
    </div>

    <div class="field">
        <label>Short summary</label>
        <textarea name="short_summary"><?php echo htmlspecialchars($note->short_summary); ?></textarea>
    </div>

    <input type="submit" value="save">

</form>