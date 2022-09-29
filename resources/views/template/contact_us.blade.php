<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    <link rel="stylesheet" href="../assets/css/contact_us.css">
</head>
<style>

</style>

<body>

    @include('include.header')
    <main>
        <div class=" section_header">
            <div class="heading">
                <h4>
                    Contact Us
                </h4>
                <div class="breadcrumb_container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </div>
            </div>


        </div>
        <div class="contact_container">
            <div class="contact_info_cont">
                <div class="info">
                    <div>

                    </div>
                </div>
            </div>
            <div class=" form_container">

                <form>

                    <label>Your Name</label><input class="full_width" id="name" type="text" name="sender_name">
                    <label>Phone Number</label><input type="tel"class="full_width" name="phone_number"
                        id="phone">
                    <label>Email</label> <input class="full_width"type="email" name="email" id="email">
                    <label>Subject</label> <input class="full_width"type="text" name="subject" id="subject">
                    <label>Your message</label>
                    <textarea class="full_width" name="" id="message" cols="20" rows="6"></textarea><br>
                    <button class="form_btn" type="submit">send Message</button>
                </form>


            </div>
        </div>









        <div class="subscribe">

        </div>
    </main>

    @include('include.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
