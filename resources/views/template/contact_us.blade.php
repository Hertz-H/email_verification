@extends('template.layout.master')
@section('css')
    <link rel="stylesheet" href="../assets/css/contact_us.css">
@endsection
@section('content')
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
                    <label>Phone Number</label><input type="tel"class="full_width" name="phone_number" id="phone">
                    <label>Email</label> <input class="full_width"type="email" name="email" id="email">
                    <label>Subject</label> <input class="full_width"type="text" name="subject" id="subject">
                    <label>Your message</label>
                    <textarea class="full_width" name="" id="message" cols="20" rows="6"></textarea><br>
                    <button class="form_btn" type="submit">send Message</button>
                </form>


            </div>
        </div>

    </main>
@endsection

</html>
