$( document ).ready(function() {
    console.log( "ready!" );
    $('#button, #but1').on('click',function () {
        event.preventDefault();
        $("#AddSpecifications, #EditSpecifications").prepend("<tr>" +
                "<td class='list-punct'>" +
                    "<input type='text' placeholder='Название характеристики' name='nameCharactiristic[]'>" +
                "</td>" +
                "<td class='list-punct1'>" +
                    "<input type='text' placeholder='Свойство' name='namePropertie[]'>" +
                "</td>" +
            "</tr>"
        );
    });
});

