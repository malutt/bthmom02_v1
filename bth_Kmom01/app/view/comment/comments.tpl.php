<div id="comments">
<h2>Kommentarer</h2>

<?php if (is_array($comments)) : ?>
<div class='comments'>
<?php if(empty($comments)) : ?>
	<p>Det finns inga kommentarer. Bli den första att kommentera nedan:</p>
<?php endif; ?>
<?php foreach ($comments as $id => $comment) : ?>



<!--h4>Kommentar #<?=$id+1?></h4 -->
<!--?php var_dump($comment);? -->
    
  
<p class="comment">
	<span class="commentName"><?=($comment['name'])?></span><span class="commentDate"><?=(date("Y-m-d h:i",$comment['timestamp']))?></span><br/>
	<span class="commentContent"><?=($comment['content'])?></span>

</p>
    
<?php endforeach; ?>
</div>
<?php endif; ?>
</div>