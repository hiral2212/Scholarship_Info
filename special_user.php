<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

        /* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        :root {
            --white: #afafaf;
            --red: #e31b23;
            --bodyColor: #292a2b;
            --borderFormEls: hsl(0, 0%, 10%);
            --bgFormEls: hsl(0, 0%, 14%);
            --bgFormElsFocus: hsl(0, 7%, 20%);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
        }

        a {
            color: inherit;
        }

        input,
        select,
        textarea,
        button {
            font-family: inherit;
            font-size: 100%;
        }

        button,
        label {
            cursor: pointer;
        }

        select {
            appearance: none;
        }

        /* Remove native arrow on IE */
        select::-ms-expand {
            display: none;
        }

        /*Remove dotted outline from selected option on Firefox/
        /*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
        /*We use !important to override the color set for the select on line 99*/
        select:-moz-focusring {
            color: transparent !important;
            text-shadow: 0 0 0 var(--white);
        }

        textarea {
            resize: none;
        }

        ul {
            list-style: none;
        }

        body {
            font: 18px/1.5 "Open Sans", sans-serif;
            background-image: url('images/register-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            /* background: var(--bodyColor); */
            /* color: var(--white); */
            margin: 1.5rem 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* FORM ELEMENTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form h1 {
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }

        .my-form li,
        .my-form .grid>*:not(:last-child) {
            margin-bottom: 1.5rem;
        }

        .my-form select,
        .my-form input,
        .my-form textarea,
        .my-form button,
        .my-form #fileToUpload {
            width: 100%;
            line-height: 1.5;
            padding: 15px 10px;
            border: 1px solid var(--borderFormEls);
            /* color: var(--white);
      background: var(--bgFormEls); */
            transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
                transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form .dropdown {
            width: 100%;
            line-height: 1.5;
            padding: 15px 10px;
            border: 1px solid var(--borderFormEls);
            /* color: var(--white);
      background: var(--bgFormEls); */
            transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
                transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form input[type=file]::file-selector-button {
            background-color: gray;
            color: white;

        }

        .my-form input[type=file]::file-selector-button:hover {
            background-color: darkgray;
            color: black;

        }

        .my-form textarea {
            height: 170px;
        }

        .my-form ::placeholder {
            color: inherit;
            /*Fix opacity issue on Firefox*/
            opacity: 1;
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus,
        .my-form button:enabled:hover,
        .my-form button:focus,
        .my-form #fileToUpload {
            /* background: var(--bgFormElsFocus); */
            background: white;
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus {
            transform: scale(1.02);
        }

        .my-form *:required,
        .my-form select {
            background-repeat: no-repeat;
            background-position: center right 12px;
            background-size: 15px 15px;
        }

        /* .my-form *:required {
            /* background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg); */
         */

        .my-form select {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
        }

        .my-form *:disabled {
            cursor: default;
            filter: blur(2px);
        }

        /* FORM BTNS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form .required-msg {
            display: none;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg) no-repeat center left / 15px 15px;
            padding-left: 20px;
        }

        .my-form .btn-grid {
            position: relative;
            overflow: hidden;
            transition: filter 0.2s;
        }

        .my-form button {
            font-weight: bold;
        }

        .my-form button>* {
            display: inline-block;
            width: 100%;
            transition: transform 0.4s ease-in-out;
        }

        .my-form button .back {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-110%, -50%);
        }

        .my-form button:enabled:hover .back,
        .my-form button:focus .back {
            transform: translate(-50%, -50%);
        }

        .my-form button:enabled:hover .front,
        .my-form button:focus .front {
            transform: translateX(110%);
        }

        .my-form a {
            text-decoration: none;
        }

        /* CUSTOM CHECKBOX
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form input[type="checkbox"] {
            position: absolute;
            left: -9999px;
        }

        .my-form input[type="checkbox"]+label {
            position: relative;
            display: inline-block;
            padding-left: 2rem;
            transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form input[type="checkbox"]+label::before,
        .my-form input[type="checkbox"]+label::after {
            content: "";
            position: absolute;
        }

        .my-form input[type="checkbox"]+label::before {
            left: 0;
            top: 6px;
            width: 18px;
            height: 18px;
            border: 2px solid black;
        }

        .my-form input[type="checkbox"]:checked+label::before {
            background: var(--red);
        }

        .my-form input[type="checkbox"]:checked+label::after {
            left: 7px;
            top: 7px;
            width: 6px;
            height: 14px;
            border-bottom: 2px solid white;
            border-right: 2px solid white;
            transform: rotate(45deg);
        }

        /* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media screen and (min-width: 600px) {
            .my-form .grid {
                display: grid;
                grid-gap: 1.5rem;
            }

            .my-form .grid-2 {
                grid-template-columns: 1fr 1fr;
            }

            .my-form .grid-3 {
                grid-template-columns: auto auto auto;
                align-items: center;
            }

            .my-form .grid>*:not(:last-child) {
                margin-bottom: 0;
            }

            .my-form .required-msg {
                display: block;
            }
        }

        @media screen and (min-width: 541px) {
            .my-form input[type="checkbox"]+label::before {
                top: 50%;
                transform: translateY(-50%);
            }

            .my-form input[type="checkbox"]:checked+label::after {
                top: 3px;
            }
        }
    </style>
</head>

<body>

    <form class="my-form" action="addScholarshipToPortal.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1>Please Add Your Details Here</h1>
            <ul>
                <li>
                    <div class="grid">
                        <input type="text" placeholder="Name of Scholarship" pattern="[a-zA-Z][a-zA-Z\s]*" name="name" required />
                    </div>
                </li>
                <li>
                    <div class="grid">
                        <input type="text" placeholder="Income" pattern="^[0-9]*$" name="income" required />
                    </div>
                </li>
                <li>
                    <div class="dropdown col-md-4">
                        <select name="type" required="true" style="border: none; padding: 0;">
                            <option hidden>Type</option>

                            <option value="International">International</option>
                            <option value="national">National</option>
                        </select>
                    </div>
                </li>

                <li>
                    <div class="dropdown col-md-4">
                        <select name="category" required="true" style="border: none; padding: 0;">
                            <option hidden>Category Type</option>

                            <option value="all">For All</option>
                            <option value="Open">Open</option>
                            <option value="SEBC">SEBC</option>
                            <option value="ST">ST</option>
                            <option value="SC">SC</option>
                        </select>
                    </div>
                </li>
                <li>
                    <input type="text" placeholder="Academic Eligibility" name="eligible" required />
                </li>
                <li>
                    <div class="dropdown d-flex me-4" style="display: flex;">
                        <label>Starting Date</label>
                        <input type="date" placeholder="" name="s_date" required style="border: none;" />
                    </div>
                </li>
                <li>
                    <div class="dropdown d-flex me-4" style="display: flex;">
                        <label>Ending Date</label>
                        <input type="date" placeholder="" name="e_date" required style="border: none;" />
                    </div>
                </li>
                <li class="dropdown">
                    <select name="hostelar" class="dropdown-toggle" id="navbarDarkDropdownMenuLink" style="border: none; padding: 0;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <option hidden>Hostel Status</option>
                        <option value="both"><a class="dropdown-item">Both</a></option>
                        <option value="true"><a class="dropdown-item">Yes</a></option>
                        <option value="false"><a class="dropdown-item">No</a></option>
                    </select>
                </li>
                <li>
                    <div class="dropdown col-md-4">
                        <select name="govOrPri" class="form-label" required="true" style="border: none;">
                            <option hidden class="">Scholarship Type</option>

                            <option value="government">Government</option>
                            <option value="private">Non-Government</option>
                        </select>
                    </div>
                </li>
                <li>
                    <input type="text" placeholder="Scholarship Amount" pattern="^[0-9]*$" name="amount" required />
                </li>
                <li>
                    <textarea type="text" placeholder="About Scholarship" name="aboutScholarship" required /></textarea>
                </li>
                <li>
                    <input type="url" placeholder="Apply Link" name="link" required />
                </li>
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Scholarship Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" value="Pre Matric Scholarship">Pre Matric Scholarship</a></li>
                        <li><a class="dropdown-item" value="Post Matric Scholarship">Post Matric Scholarship</a></li>
                    </ul>
                </li> -->
                <li>
                    <div class="dropdown col-md-4">
                        <select name="matric" required="true" style="border: none; padding: 0;">
                            <option hidden>Select Scholarship Category</option>
                            <option value="both">Pre & Post Matric Scholarship</option>
                            <option value="Pre">Pre Matric Scholarship</option>
                            <option value="Post">Post Matric Scholarship</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="pdfOfGuide">Pdf of Guidence </label>
                    <input type="file" id="fileToUpload" accept="application/pdf" name="guidence" />
                </li>
                <li>
                    <label for="pdfOfFAQ">Pdf of FAQ </label>
                    <input type="file" id="fileToUpload" accept="application/pdf" name="faq" />
                </li>
                <li>
                    <input type="checkbox" id="terms" require/>
                    <label for="terms">I have read and agreed with
                        <a href="">the terms and conditions.</a></label>
                </li>
                <li>
                    <div class="grid grid-3">
                        <div class="required-msg">REQUIRED FIELDS</div>
                        <button class="btn-grid" type="submit"  name="addScholarshipToPortal" disabled>
                            <span class="back">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="" />
                            </span>
                            <span class="front">SUBMIT</span>
                        </button>
                        <button class="btn-grid" type="reset" disabled>
                            <span class="back">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="" />
                            </span>
                            <span class="front">RESET</span>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const checkbox = document.querySelector(
            '.my-form input[type="checkbox"]'
        );
        const btns = document.querySelectorAll(".my-form button");

        checkbox.addEventListener("change", function() {
            const checked = this.checked;
            for (const btn of btns) {
                checked ? (btn.disabled = false) : (btn.disabled = true);
            }
        });
    </script>
</body>

</html>