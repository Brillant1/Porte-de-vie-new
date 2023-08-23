@extends('front.partials.template')
@section('content')

<div class="modal fade" id="paypalModal" tabindex="-1" role="dialog" aria-labelledby="paypalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Finaliser le payement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div id="paypal-button-container"></div>
        </div>
    </div>
    </div>
</div>
    <div>
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <div class="w-75 d-flex align-items-center justify-content-start ">
                <div class="d-flex align-items-center justify-content-between" style="width: 65%;">
                    <div class=" mb-3 url-back">
                        <a href="{{ URL::previous() }}" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </a>
                    </div>
                    <p class="text-center h3 rosette-text-orange fw-bold text-uppercase mb-3 pb-4">Faites un don aujourd'hui. </p>

                </div>
            </div>


            <div class="success_message_don alert alert-success text-center" style="width: 75%; display:none;">
                <span>Votre don a bien été reçu. Soyez abondamment béni pour celà !</span>
            </div>
             <div class="error_message_don alert alert-danger text-center" style="width: 75%; display:none;">
                <span>La transaction a échouée, veillez ressayer plus tard. Merci !</span>
            </div>

            <div class="tab-content shadow detail-activite-content p-4 w-75" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="">
                    </div>
                    <div>
                        <form action="#" class="offrande-form mt-4 pt-2  px-3">
                            @csrf
                            <h3 class=" text-center pb-2">Nous avons besoin de vous connaître</h3>
                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="nom" class=" form-label p-0 col-3 pl-3">Nom <span class="text-danger">*</span> </label>
                                <input type="text" name="nom" id="nom" class=" form-control" required>
                            </div>
                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="prenom" class=" form-label p-0 col-3 pl-3" >Prénom <span class="text-danger">*</span></label>
                                <input type="text" name="prenom" id="prenom" class=" form-control" required>
                            </div>
                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="telephone" class=" form-label p-0 col-3 pl-3">Téléphone <span class="text-danger">*</span></label>
                                <input type="text" name="telephone" id="telephone" class=" form-control" required>
                            </div>

                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="telephone" class=" form-label p-0 col-3 pl-3">Type de don <span class="text-danger">*</span></label>
                                <select name="type" id="type" class="form-select form-control">
                                    <option value="">Sélectionnez un don</option>
                                    <option value="dime">Dîme</option>
                                    <option value="dime">Offrande</option>
                                    <option value="dime">Semence</option>
                                    <option value="anonyme">Anonyme</option>
                                </select>
                            </div>

                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="telephone" class=" form-label p-0 col-3 pl-3">Montant souhaité <span class="text-danger">*</span></label>
                                <input type="number" name="price" id="price" class=" form-control" min="1" required>
                            </div>

                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="email" class=" form-label p-0 col-3 pl-3">Adresse email  <span class=" text-danger">(optionnel)</span></label>
                                <input type="email" name="email" id="email" class=" form-control">
                            </div>
                            <div class=" input-group row mt-2" style="line-height: 40px">
                                <label for="message" class="form-label p-0 col-3 pl-3">Vous avez un message ? <span
                                        class="text-danger fw-bold">(Optionnel)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="d-flex mt-3 pb-4 justify-content-center align-items-center action-button">
                                <button class="text-white bg-dark rounded p-2 px-4 border-0 btn-momo" type="submit" style="background-color: blue;">Enrégistrer</button>
                                <a href="#" class=" px-5 rounded-2 text-white bg-danger ml-3  p-2 rounded text-white">Annuler</a>
                            </div>
                            {{-- <input type="hidden" id="type" name="type" value="offrande"> --}}
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AX5ysXX-tJxBGszFfkyXCgjjxM3swEaUtX0Q3EPv7DKwZGIwoVkjUXHU5aR8VJSBRz_SWi2oF5DniPDb&components=buttons&currency=EUR&locale=fr_FR"></script>


    <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        callback="{{ route('validate_paiement') }}" key="51a238face61d82775a074c24111dba9108523ec" src="https://cdn.kkiapay.me/k.js"></script>
    <script>

        $(document).ready(function() {
            $('.offrande-form').submit(function(e) {
                e.preventDefault();
                let nom = $('.offrande-form #nom').val();
                prenom = $('.offrande-form #prenom').val();
                telephone = $(' .offrande-form #telephone').val();

                message = $(' .offrande-form #message').val();
                price = $(' .offrande-form #price').val();
                email = $(' .offrande-form #email').val();

                type = $(' .offrande-form #type').val();
                if (nom == "" || prenom == "" || type=="" || telephone == "") {
                    alert('Veuillez remplir tous les champs')
                } else {
                    openKkiapayWidget({
                        amount: $('.offrande-form #price').val(),
                        position: "center",
                        phone: "",
                        theme: "#032497F5",
                        key: "51a238face61d82775a074c24111dba9108523ec",

                    });

                    addSuccessListener(response => {
                        console.log(response.transactionId);
                        $.ajax({
                            type: 'POST',
                            url: '{!! URL::to('storeDon') !!}',
                            data: {
                                'nom': nom,
                                'prenom': prenom,
                                'message': message,
                                'email': email,
                                'price': price,
                                'telephone': telephone,
                                'type': type,
                                'transactionId':response.transactionId,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                console.log(data)
                                if (data.success) {
                                    $('.success_message_don').css(
                                        'display', 'block');
                                    setTimeout(() => {
                                        $('.success_message_don')
                                            .css('display', 'none');
                                    }, 8000);
                                    $(' .offrande-form #nom').val("");
                                    $(' .offrande-form #prenom').val("");
                                    $(' .offrande-form #telephone').val("");
                                    $(' .offrande-form #price').val("");
                                    $(' .offrande-form #message').val("");
                                    $(' .offrande-form #email').val("");
                                    $(' .offrande-form #type').val("");
                                }else{
                                    $('.error_message_don').css(
                                        'display', 'block');
                                    setTimeout(() => {
                                        $('.error_message_don')
                                            .css('display', 'none');
                                    }, 7000);
                                }
                            }
                        })
                    });
                }
            })
        });


        function pay_with_paypal(total){
            $('#paypalModal').modal('show');
            $('#paypal-button-container').text('');
            paypal.Buttons({
                style: {
                    layout: 'vertical',
                    color:  'blue',
                    shape:  'rect',
                    label:  'paypal'
                },
                createOrder: function(data, actions) {
                    // let value = devise > 1 ? `${(total / devise).toFixed(2)}` : `${total}`;
                    let value = (total / 650).toFixed(2);
                    if(total){
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value
                                }
                            }]
                        });
                    }
                },
                onApprove: function(data, actions) {
                    // This function captures the funds from the transaction.
                    return actions.order.capture().then(function(details) {
                        $('input[name="transaction_id"]').val(details.id);
                        validate_form();
                    });
                }
            }).render('#paypal-button-container');
        }


    </script>

@endsection
