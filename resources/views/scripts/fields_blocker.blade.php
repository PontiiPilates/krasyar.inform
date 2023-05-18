<script>
    /**
     * Блокирует поля в зависимости от того, что выбрано в селекте. 
     */
    $('#discounter_list').prop('disabled', true);
    $('#krasyar_list').prop('disabled', true);

    $("#structure").change(function() {

        switch ($("#structure").val()) {
            case 'office':
                $('#krasyar_list').prop('disabled', true);
                $('#discounter_list').prop('disabled', true);
                break;
            case 'krasyar':
                $('#krasyar_list').prop('disabled', false);
                $('#discounter_list').prop('disabled', true);
                break;
            case 'discounter':
                $('#krasyar_list').prop('disabled', true);
                $('#discounter_list').prop('disabled', false);
                break;
        }
    });
</script>
