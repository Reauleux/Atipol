    $('input:radio[name="inv"]').change(function() {
        if ($(this).val()=='NOK') {
            $('#no_inv').attr('disabled',true);
        } else
            $('#no_inv').removeAttr('disabled');
    });

    $('input:radio[name="input_vestyna"]').change(function() {
        if ($(this).val()=='NOK') {
            $('#no_vestyna').attr('disabled',true);
        } else
            $('#no_vestyna').removeAttr('disabled');
    });

    $('input:radio[name="ba_rekon"]').change(function() {
        if ($(this).val()=='NOK') {
            $('#dok_ba_rekon').attr('disabled',true);
        } else
            $('#dok_ba_rekon').removeAttr('disabled');
    });

    $('input:radio[name="po"]').change(function() {
        if ($(this).val()=='NOK') {
            $('#no_po').attr('disabled',true);
        } else
            $('#no_po').removeAttr('disabled');
    });

    $('input:radio[name="bast"]').change(function() {
        if ($(this).val()=='NOK') {
            $('#bulan_bast').attr('disabled',true);
        } else
            $('#bulan_bast').removeAttr('disabled');
    });
