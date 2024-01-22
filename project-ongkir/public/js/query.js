document.addEventListener('DOMContentLoaded', function () {
	$('#origin_province, #destination_province').select2({
        ajax: {
            url: "{{ route('provinces') }}",
            type: 'GET',
            dataType: 'json',
            delay: 250,
            data: function(params){
                return {
                    keyword: params.term
                }
            },
            processResults: function(response){
                return {
                    results: response
                }
            },
        }
    });

    $('#origin_city, #destination_city').select2();

    $('#origin_province').on('change', function(){
        $('#origin_city').empty();
        $('#origin_city').append('<option>Choose City</option>');
        $('#origin_city').select2('close');
        $('#origin_city').select2({
            ajax: {
                url: "{{ route('cities') }}",
                type: 'GET',
                dataType: 'json',
                delay: 250,
                data: function(params){
                    return {
                        keyword: params.term,
                        province_id: $('#origin_province').val()
                    }
                },
                processResults: function(response){
                    return {
                        results: response
                    }
                },
            }
        });
    });

    $('#destination_province').on('change', function(){
        $('#destination_city').empty();
        $('#destination_city').append('<option>Choose City</option>');
        $('#destination_city').select2('close');
        $('#destination_city').select2({
            ajax: {
                url: "{{ route('cities') }}",
                type: 'GET',
                dataType: 'json',
                delay: 250,
                data: function(params){
                    return {
                        keyword: params.term,
                        province_id: $('#destination_province').val()
                    }
                },
                processResults: function(response){
                    return {
                        results: response
                    }
                },
            }
        });
    });

    $('#checkBtn').on('click', function(e){
        e.preventDefault();
        let origin = $('#origin_city').val();
        let destination = $('#destination_city').val();
        let courier = $('#courier').val();
        let weight = $('#weight').val();
        $.ajax({
            url: "{{ route('check-ongkir') }}",
            type: 'POST',
            dataType: 'json',
            data: {
                _token: "{{ csrf_token() }}",
                origin: origin,
                destination: destination,
                courier: courier,
                weight: weight
            },
            beforeSend: function(){
                $('#checkBtn').html('Loading...');
                $('#checkBtn').attr('disabled', true);
            },
            success: function(response){
                $('#result').removeClass('d-none');
                $('#checkBtn').html('Submit');
                $('#checkBtn').attr('disabled', false);
                $('#result').empty();
                $('#result').append(`
                    <div class="col-12">
                        <div class="card border rounded shadow">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>Description</th>
                                            <th>Cost</th>
                                            <th>ETD</th>
                                        </tr>
                                    </thead>
                                    <tbody id="resultBody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                `);
                $.each(response, function(i, val){
                    $('#resultBody').append(`
                        <tr>
                            <td>${val.service}</td>
                            <td>${val.description}</td>
                            <td>${val.cost[0].value}</td>
                            <td>${val.cost[0].etd}</td>
                        </tr>
                    `);
                });
            },
            error: function(xhr){
                console.log(xhr.responseText);
            }
        });
    });
}, false);

