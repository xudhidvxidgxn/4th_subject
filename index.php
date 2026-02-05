<?php require_once('db.php'); ?>
<?php require_once('header.php') ?>
<?php if (isset($_SESSION['userid'])): ?>
    Hello, <?= $_SESSION['name'] ?> !
    <div><a href="logout.php">로그아웃</a></div>
    <a href="write.php" style="display: flex; text-decoration: none; color: inherit;"><div style="background-color: skyblue; padding: 5px 20px;">글쓰기</div></a>
<?php else: ?>
    <form action="login_check.php" method="GET">
        <div>
            <input type="text" name="email" placeholder="example@domain.com" autocomplete="off">
        </div>
        <div>
            <input type="password" name="pw" placeholder="비밀번호" autocomplete="off">
        </div>
        <div style="display: flex; gap: 10px;">
            <button type="submit">로그인</button>
            <a href="signin.php">회원가입</a>
        </div>
    </form>
<?php endif; ?>
<?php require_once('footer.php') ?>