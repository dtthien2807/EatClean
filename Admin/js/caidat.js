function question_confirm(id)
{
    if(confirm("Bạn có muốn xóa review này?"))
    {
        window.location='deleteReview.php?id=' + id
    }
}
function question_confirm_User(id)
{
    if(confirm("Bạn có muốn khóa user này?"))
    {
        window.location='deleteUser.php?id=' + id
    }
}