$(document).ready(function () {
    // add image to image demo 
    $('.modals').hide();
    $('.modal-close').on('click', function () {
        $('.modals').hide();
    })
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width: 300,
            height: 300,
            type: 'square' //circle
        },
        boundary: {
            width: 300,
            height: 300
        }
    });

    $('#image_crop').on('change', function () {
        //$('.modal').hide();
        var reader = new FileReader();
        reader.onload = function (event) {
            //console.log(event.target);
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function () {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('.modals').show();
    });

    // image croped insert in database by ajax
    $('.crop_image').click(function (event) {
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (response) {
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: { "image": response },
                success: function (data) {
                    $('.modals').hide();
                    load_images();
                    alert(data);
                }
            })
        });
    });

    load_images();

    function load_images() {
        $.ajax({
            url: "fetch_images.php",
            success: function (data) {
                //console.log(data);
                $('#store_image').html(data);
            }
        })
    }

})

