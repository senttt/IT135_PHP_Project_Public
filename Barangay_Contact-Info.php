<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

h1 {
    margin-bottom: 50px;
    font-weight: bolder;

}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 40px;
    background: #fff;
}

#accordion {
    margin: 100px auto;
    width: 600px;
}

#accordion li {
    list-style: none;
    width: 100%;
    margin-bottom: 10px;
    background: #2694af;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
}

#accordion li label {
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 500;
    cursor: pointer;
}

#accordion li label span {
    transform: rotate(90deg);
    font-size: 22px;
}

#accordion label+input[type="radio"] {
    display: none;
}

#accordion .content {
    padding: 0 10px;
    line-height: 26px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s;
}

#accordion label+input[type="radio"]:checked+.content {
    max-height: 400px;
}
</style>

<body>
    <ul id="accordion">
        <li>
            <label for="first">Punong Barangay<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="first" checked>

            <div class="content">
                <p>EDUARDO C. LOZADA
                    <br>
                    email: NONE
                    <br>
                    Contact No.: NONE
                </p>
            </div>
        </li>

        <li>
            <label for="second">Sangguniang Barangay Members<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="second" checked>

            <div class="content">
                <p>FE V. CUNANAN
                    <br>
                    email: fe.cunanan@gmail.com
                    <br>
                    Contact No.: NONE
                    <br>
                    <br>

                    LORENA S. ENGRACIAL
                    <br>
                    email: NONE
                    <br>
                    Contact No.: NONE
                    <br>
                    <br>

                    MICHAEL L. TOMILLOSO
                    <br>
                    email: tomilloso.michael29@gmail.com
                    <br>
                    Contact No.: NONE
                    <br>
                    <br>

                    MARIA CRISTINA M. PUNO
                    <br>
                    email: NONE
                    <br>
                    Contact No.: NONE
                    <br>
                    <br>

                    CARY C. BIAS
                    <br>
                    email: cary.bias@yahoo.com
                    <br>
                    Contact No.: NONE
                    <br>
                    <br>

                    REGINA C. GANAPIN
                    <br>
                    email: NONE
                    <br>
                    Contact No.: NONE
                    <br>
                    <br>

                    DANILO M. YAMBAO
                    <br>
                    email: NONE
                    <br>
                    Contact No.: NONE
                </p>
            </div>
        </li>

        <li>
            <label for="fifth">SK Chairperson<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fifth" checked>

            <div class="content">
                <p>JOSHUA B. GONZALES
                    <br>
                    email: joshkit6@gmail.com
                    <br>
                    Contact No.: NONE
                </p>
            </div>
        </li>

        <li>
            <label for="fourth">Barangay Secretary<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fourth" checked>

            <div class="content">
                <p>RODRIGO P. GARCIA
                    <br>
                    email: NONE
                    <br>
                    Contact No.: NONE
                </p>
        </li>
    </ul>

</body>

</html>