<link rel="stylesheet" href="{{ url('css/home-form.css') }}" />

@extends('frontend.layouts.main')
@section('main-container')


<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent page-header-contact">
        <div class="dcell">
            <div class="container">

                    
            </div>
        </div>
    </div>
</div>

<div class="containerr">
        <div class="carda">
            <div class="form">
                <div class="left_side">
                    <div class="left_heading">
                        <h3>The Design House</h3>
                    </div>
                    <div class="steps_content">
                        <h3>Step <span class="step_number">1</span></h3>
                        <!-- <p class="step_number-content active">Enter your personal information.</p>
                        <p class="step_number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                        <p class="step_number-content d-none">Help companies get to know you better by telling then about your past experiences.</p>
                        <p class="step_number-content d-none">Add your profile piccture and let companies find youy fast.</p> -->
                    </div>
                    <ul class="progress_bar">
                        <li class="activ">About</li>
                        <li>Contact Information</li>
                        <li>Project Information</li>
                        <li>Completed</li>

                    </ul>

                </div>

                <div class="right-side">
                    <div class="main activ just">

                        <img src="images/form_logo.png" class="logo" alt=""width="30%"style="height:fit-content" >
                        <div class="text">
                            <h4>NEW CLIENT QUESTIONNAIRE FOR HOUSE DESIGN</h4>
                            <H6 class="">Please take a few moments to complete the information requested below. Hopefully, it will
                                cause you to think more carefully about your needs and articulate them as clearly as
                                possible. Where you are unsure about certain questions or where questions are irrelevant
                                to your situation, please simply leave blank and we can address them later. Where you
                                have photographs to illustrate please include. Try to be as specific as possible. Clear
                                communication will go a long way to ensuring your vision is attained.
                                Brief answers are fine. Use the back of these sheets if you would like to provide more
                                information. Have fun telling us about your wants and needs. We would like to take full
                                advantage of the time we share together and your input is essential. Thank you for your
                                cooperation. All information will be kept confidential. The purpose of this
                                questionnaire is to help us gain a better understanding of your goals and objectives for
                                your project.</H6>
                        </div>

                        <div class="buttons">
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <div class="text">
                            <h2>Your Contact Information</h2>
                            <p></p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" class="inputa" class="inpu" required require id="user_name">
                                <span>Name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" class="inputa" class="inpu" required require>
                                <span>Address</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" class="inputa" required require>
                                <span>City</span>
                            </div>
                            <div class="input-div">
                                <input type="text" class="inputa" required require>
                                <span>Cell</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" class="inputa" required require>
                                <span>Home Phone</span>
                            </div>
                            <div class="input-div">
                                <input type="text" class="inputa" required require>
                                <span>Work Phone</span>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>


                    <div class="main">
                        <div class="input-div" id="quest">
                            <div class="input-div">
                                <label class="tb labelaa" for="squarefeet">1) <span></span>Company name?</label>

                                <input class="inputa" type="text" placeholder="Type Here.....">
                            </div>
                            <div class="input-div">
                                <label class="tb labelaa" for="squarefeet">2) <span></span>Nature of business?</label>

                                <input class="inputa" type="text" placeholder="Type Here.....">
                                <div class="d-flex  justify-content-between checkb ">
                                </div>

                            </div>
                            <div class="input-div">
                                <label class="tb labelaa" for="squarefeet">3) <span></span>Website address of company (if
                                    any).</label>

                                <input class="inputa" type="text" placeholder="Type Here.....">
                                <div class="d-flex  justify-content-between checkb ">
                                </div>

                            </div>

                            <div class="input-div">
                                <label class="tb labelaa" for="squarefeet">4) <span></span>Do you have Marketing or promotional
                                    material? (Advertising campaigns etc.).</label>

                                <input class="inputa" type="text" placeholder="Type Here.....">
                                <div class="d-flex  justify-content-between checkb ">
                                </div>

                            </div>
                        </div>

                        <!-- <div class="buttons button_space">
                            <button class="back_button" id="bBtn">Back</button>
                            <button class="next_button" id="nxBtn" style="display:none ;">Next Step</button>
                            !-- <button class="nextQuest" id="nextQuest">Next Questions</button> --
                            <button class="nextQuest " id="nextQuest">Next Questions</button>
                        </div> -->
                        <div class="buttons button_space">
                            <button class="back_button" id="bBtn">Back</button>
                            <button class="next_button" id="nxBtn" style="display:none ;margin-top:20px">Next Step</button>
                            <!-- <button class="nextQuest" id="nextQuest">Next Questions</button> -->
                            <button class="nextQuest " id="nextQuest">Next Questions</button>
                            <button style="" id="bqBtn">Pre Questions</button>
                        </div>
                    </div>

                    <div class="main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>

                        <div class=" congrats">
                            <h2>Completed!</h2>
                            <p>Thank you for your input. We look forward to serving you with your design needs.</p>
                            <p>
                            <p>Contact No: +92.324.4000655,</p>
                            </p>
                            <p>
                            <p>email: <a href="#">madeeha.sarfraz73@gmail.com</a></p>
                            </p>
                            <p>Facebook page:tribal-xtc
                            </p>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>


<script src="js/t3.js"></script>
<script src="js/questions.js"></script>

@endsection

