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
function question_confirm_Blog(id)
{
    if(confirm("Bạn có muốn xóa Blog này?\nHãy cẩn thận!"))
    {
        window.location='deleteBlog.php?id=' + id
    }
}
function question_confirm_Category(id)
{
    if(confirm("Bạn có muốn xóa loại này?\nHãy cẩn thận!"))
    {
        window.location='deleteCategory.php?id=' + id
    }
}
function question_confirm_Product(id)
{
    if(confirm("Bạn có muốn xóa sản phẩm này?\nHãy cẩn thận!"))
    {
        window.location='deleteProduct.php?id=' + id
    }
}
function question_confirm_Promotion(id)
{
    if(confirm("Bạn có muốn xóa khuyến mãi này?\nHãy cẩn thận!"))
    {
        window.location='deletePromotion.php?id=' + id
    }
}
function question_confirm_payment(id)
{
    if(confirm("Xác nhận đã thanh toán hóa đơn này?"))
    {
        window.location='confirm-payment.php?id=' + id
    }
}