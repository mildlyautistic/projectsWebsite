@extends('layout')

@section('content')


    <section class="section">
    <div class="container has-text-centered">
        <h2 class="title" style="color:pink;font-family:Times">Contact</h2>
        <p style="color:whitesmoke">Thank you for your interest in ALLPS. Please provide the following information about your business requirements.</p>
        <form style="padding-top: 30px">
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <label for="name" style="color: white;float:left">Name</label>
                        <p class="control has-icons-left">

                            <input class="input" name="name" type="text" placeholder="Name">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" style="color: white;float:left">Email</label>
                        <p class="control has-icons-left has-icons-right">

                            <input class="input" name="email" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <label for="subject" style="color: white">Subject</label>
                        <input class="input" name="subject" type="text" placeholder="Subject">
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <label for="message" style="color: white">Message</label>
                            <textarea class="textarea" name="message" placeholder="Message us"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary">
                                Send message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

    @endsection
