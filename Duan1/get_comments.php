<!-- get_comments.php -->
<?php
// Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối của bạn)
$conn = new mysqli('localhost', 'root', '', 'asm');

// Kiểm tra kết nối
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Lấy bình luận từ cơ sở dữ liệu
$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = $conn->query($sql);

// Hiển thị bình luận
while ($row = $result->fetch_assoc()) {
  echo "<p><strong>" . $row['name'] . ":</strong> " . $row['comment'] . "</p>";
}

// Đóng kết nối
$conn->close();
?>