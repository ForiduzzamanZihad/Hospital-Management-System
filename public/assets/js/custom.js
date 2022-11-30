$(function(){

$(function(){
    $('.delete_btn').on('click',function(e){
        e.preventDefault();
        if(confirm('sure want to delete')){
            $.ajax({
                url:$(this).attr('href'),
                type:'delete',
                success:(res)=>{
                    $(this).parents('tr').remove();
                    Toast.fire({
                        icon: 'success',
                        title: 'data deleted'
                    })
                }
            })
        }
    }); 
})
}) 