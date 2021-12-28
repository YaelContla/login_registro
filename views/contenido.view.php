<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e249e076b1.js" crossorigin="anonymous"></script>
    
    <script src="https://use.fontawesome.com/9a87d3a5c7.js"></script>

    <link rel="stylesheet" href="css/styles.css">
    <!--<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">-->

    <title>Contenido</title>

</head>

<body>

<header class="header">
   <img class="logo1" src="img/uaeh.png" alt="uaeh">
   
    <!--<hr class="border1">-->
</header>

<div class="nav-bg">
    <nav class="navegacion-principal contenedor-nav">

        <a href="instrucciones.php">Instrucciones</a>
        
        <a href="contenido.php">Examen</a>

        <a href="cerrar.php">Cerrar Sesion</a>

    </nav>    
</div>



<div class="contenedor">


    <div class="contenido">

            <h1 class="ins-eva">EVALUACIÓN</h1>

<!--**************************** A1 **************************-->
<!----------------------------- A1-1---------------------------->

<article>
    <form action="respuestas1.php" method="POST">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">#</th>
                        <th scope="col"><h4> A1-1 </h4></th>
                    </tr>
            </thead>

        

            <tbody>

                <tr>
                    <th scope="row">1</th>
                        <td>What's_____ name? She is Sussy.

                            <br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1" value="a1">
                                    <label class="form-check-label" >
                                    A) my
                                    </label> 
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1" value="b1">
                                    <label class="form-check-label" >
                                    B) your
                                    </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1" value="c1">
                                    <label class="form-check-label" >
                                    C) his
                                    </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer1" value="d1">
                                    <label class="form-check-label" >
                                    D) her
                                    </label>
                            </div>

                        </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                        <td>Do you _____ cooking? Of course.

                            <br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2" value="a2">
                                    <label class="form-check-label" >
                                    A) to like
                                    </label> 
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2" value="2">
                                    <label class="form-check-label" >
                                    B) liked
                                    </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2" value="c2">
                                    <label class="form-check-label">
                                    C) like
                                    </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer2" value="d2">
                                    <label class="form-check-label">
                                    D) will like
                                    </label>
                            </div>

                        </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                        <td>My friends _____ from Germany.

                            <br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3"   value="a3">
                                    <label class="form-check-label">
                                    A) is
                                    </label> 
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3" value="b3">
                                    <label class="form-check-label">
                                    B) are
                                    </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3" value="c3">
                                    <label class="form-check-label">
                                    C) am
                                    </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer3" value="d3">
                                    <label class="form-check-label">
                                    D) isn't
                                    </label>
                            </div>

                        </td>
                </tr>
            </tbody>
        </table> 

            <?php if (!empty($mensaje1)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje1; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
        <input type="submit" value="Resultado">
        
    </form>

</article>



<!----------------------------- A1-2 ------------------------------------>    

<article>

    <form action="respuestas2.php" method="POST">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><h4> A1-2 </h4></th>
                </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">4</th>
                    <td>_____ do you exercise? I exercise twice a week

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer4"   value="a4">
                                 <label class="form-check-label" >
                                 A) What time
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer4" value="b4">
                                 <label class="form-check-label">
                                 B) Where
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer4" value="c4">
                                 <label class="form-check-label">
                                 C) How often
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer4" value="d4">
                                 <label class="form-check-label" >
                                 D) Who
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">5</th>
                    <td>Why _____ crying? 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5" value="a5">
                                <label class="form-check-label"  >
                                A) is she
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5" value="b5">
                                <label class="form-check-label"  >
                                B) she was
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5" value="c5">
                                <label class="form-check-label"  >
                                C) did she
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer5" value="d5">
                                <label class="form-check-label"  >
                                D) she is
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">6</th>
                    <td>I think the black dog is _____ the white one.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer6" value="a6">
                                <label class="form-check-label" >
                                A) shorter than
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer6" value="b6">
                                <label class="form-check-label">
                                B) expensive than
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer6" value="c6">
                                <label class="form-check-label">
                                C) less agressive than
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer6" value="d6">
                                <label class="form-check-label" >
                                D) older
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>    
    
    <?php if (!empty($mensaje2)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje2; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">

</article>

<!--**************************** A2 ***********************************-->
<!----------------------------- A2-1 ------------------------------------> 

<article>

<form action="respuestas3.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> A2-1 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">7</th>
                    <td>Anne _____ at home last night

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer7" value="a7">
                                 <label class="form-check-label"  >
                                 A) isn't
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer7" value="b7">
                                 <label class="form-check-label" >
                                 B) didn't
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer7" value="c7">
                                 <label class="form-check-label"  >
                                 C) weren't
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer7" value="d7">
                                 <label class="form-check-label"  >
                                 D) wasn't
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">8</th>
                    <td>_____ you_____ Tv last night when I called you? What else ____ you do?

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer8" value="a8">
                                <label class="form-check-label" >
                                A) Are/watching/ do
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer8" value="b8">
                                <label class="form-check-label"  >
                                B) Is/watching/do
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer8" value="c8">
                                <label class="form-check-label"  >
                                C) Were/watching /did
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer8" value="d8">
                                <label class="form-check-label"  >
                                D) Did/watch/did
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">9</th>
                    <td>What did Estela use to do after school? She ______ every afternoon.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer9" value="a9">
                                <label class="form-check-label"  >
                                A) plays basketball
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer9" value="b9">
                                <label class="form-check-label"  >
                                B) use to play basketball
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer9" value="c9">
                                <label class="form-check-label"  >
                                C) Used to
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer9" value="d9">
                                <label class="form-check-label"  >
                                D) used to play basketball
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>

    <?php if (!empty($mensaje3)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje3; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!----------------------------- A2-2 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> A2-2 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">10</th>
                    <td>Probably, I _____ go out for dinner

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer10" value="a10">
                                 <label class="form-check-label"  >
                                 A) going to
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer10" value="b10">
                                 <label class="form-check-label"  >
                                 B) maybe
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer10" value="c10">
                                 <label class="form-check-label"  >
                                 C) can
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer10" value="d10">
                                 <label class="form-check-label"  >
                                 D) will
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">11</th>
                    <td>Is she_____ get married soon?

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer11" value="a11">
                                <label class="form-check-label" >
                                A) going to
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer11"  value="b11">
                                <label class="form-check-label" >
                                B) can
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer11" value="c11">
                                <label class="form-check-label" >
                                C) will
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer11"   value="d11">
                                <label class="form-check-label"  >
                                D) might
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">12</th>
                    <td>What time are you _____ home tomorrow morning? At about 8 oclock

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer12"   value="a12">
                                <label class="form-check-label"   >
                                A) leave
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer12"   value="b12">
                                <label class="form-check-label"   >
                                B) left
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer12"   value="c12">
                                <label class="form-check-label"   >
                                C) leaving
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer12"   value="d12">
                                <label class="form-check-label"   >
                                D) to leave
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table> 
    
    <?php if (!empty($mensaje1)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje1; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!--**************************** B1 ***********************************-->
<!----------------------------- B1-1 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B1-1 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">13</th>
                    <td>Where .... you been? I .... seen you since school

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer13"  value="a13">
                                 <label class="form-check-label"   >
                                 A) have/have
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer13"  value="b13">
                                 <label class="form-check-label"   >
                                 B) have/haven't
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer13"  value="c13">
                                 <label class="form-check-label"   >
                                 C) has/hasn't
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer13"  value="d13">
                                 <label class="form-check-label"   >
                                 D) haven't/have
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">14</th>
                    <td>I  .... an interesting novel recently 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer14"   value="a14">
                                <label class="form-check-label"   >
                                A) am reading
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer14"   value="b14">
                                <label class="form-check-label"   >
                                B) were reading
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer14"   value="c14">
                                <label class="form-check-label"   >
                                C) have been reading
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer14"   value="d14">
                                <label class="form-check-label"   >
                                D) read
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">15</th>
                    <td>How long have you been learning English? I have been studying it _______ 3 years ago.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer15"   value="a15">
                                <label class="form-check-label"   >
                                A) for
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer15"   value="b15">
                                <label class="form-check-label"   >
                                B) from
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer15"   value="c15">
                                <label class="form-check-label"   >
                                C) since
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer15"   value="d15">
                                <label class="form-check-label"   >
                                D) for about
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
        
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!----------------------------- B1-2 ------------------------------------>

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B1-2 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">16</th>
                    <td>I would rather ....at home than ....to that event. 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer16"   value="a16">
                                 <label class="form-check-label"   >
                                 A) stay/attend
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer16"   value="b16">
                                 <label class="form-check-label"   >
                                 B) stay/attended
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer16"   value="c16">
                                 <label class="form-check-label"   >
                                 C) stayed/attend
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer16"   value="d16">
                                 <label class="form-check-label"   >
                                 D) staying/attending
                                 </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">17</th>
                    <td>Do you  ..... in the city or the suburbs?

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer17"   value="a17">
                                <label class="form-check-label"   >
                                A) living
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer17"   value="b17">
                                <label class="form-check-label"   >
                                B) would you prefer living
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer17"   value="c17">
                                <label class="form-check-label"   >
                                C) prefer living
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer17"   value="d17">
                                <label class="form-check-label"   >
                                D) prefer
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">18</th>
                    <td><mark>Jose:</mark> I am having a surprise birthday party for Alex. Do you want to go? <br>
                    <mark>Luz:</mark> It would be great, __________. Maybe next time.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer18"   value="a18">
                                <label class="form-check-label"   >
                                A) unfortunately I have to work.
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer18"   value="b18">
                                <label class="form-check-label"   >
                                B) How can I help?
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer18"   value="c18">
                                <label class="form-check-label"   >
                                C) What time is it going to be?
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer18"   value="d18">
                                <label class="form-check-label"   >
                                D) I do not want.  
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">


</article>

<!----------------------------- B1-3 ------------------------------------>

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B1-3 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">19</th>
                    <td>Every time the manager hires new staff, he ..... take experience into consideration. 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer19"   value="a19">
                                 <label class="form-check-label"   >
                                 A) can
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer19"   value="b19">
                                 <label class="form-check-label"   >
                                 B) might
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer19"   value="c19">
                                 <label class="form-check-label"   >
                                 C) should
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer19"   value="d19">
                                 <label class="form-check-label"   >
                                 D) could
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">20</th>
                    <td>You ..... follow the rules and regulations of your school and city to avoid problems. 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer20"   value="a20">
                                <label class="form-check-label"   >
                                A) may
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer20"   value="b20">
                                <label class="form-check-label"   >
                                B) must
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer20"   value="c20">
                                <label class="form-check-label"   >
                                C) musn't
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer20"   value="d20">
                                <label class="form-check-label"   >
                                D) shouldn't
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">21</th>
                    <td>I ...... design a test for my students this week because the coordinator asked for it. 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer21"   value="a21">
                                <label class="form-check-label"   >
                                A) can
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer21"   value="b21">
                                <label class="form-check-label"   >
                                B) should
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer21"   value="c21">
                                <label class="form-check-label"   >
                                C) have to
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer21"   value="d21">
                                <label class="form-check-label"   >
                                D) might
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!----------------------------- B1-4 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B1-4 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">22</th>
                    <td>Don't forget the umbrella because if it ....., you will get wet

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer22"   value="a22">
                                 <label class="form-check-label"   >
                                 A) rain
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer22"   value="b22">
                                 <label class="form-check-label"   >
                                 B) rains
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer22"   value="c22">
                                 <label class="form-check-label"   >
                                 C) rained
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer22"   value="d22">
                                 <label class="form-check-label"   >
                                 D) will rain
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">23</th>
                    <td>You get water if you ..... hydrogen and oxygen

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer23"   value="a23">
                                <label class="form-check-label"   >
                                A) mix
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer23"   value="b23">
                                <label class="form-check-label"   >
                                B) mixes
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer23"   value="c23">
                                <label class="form-check-label"   >
                                C) mixed
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer23"   value="d23">
                                <label class="form-check-label"   >
                                D) will mix
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">24</th>
                    <td>If my students spoke English fluently, I _____ English during the whole class. 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer24"   value="a24">
                                <label class="form-check-label"   >
                                A) would have spoken
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer24"   value="b24">
                                <label class="form-check-label"   >
                                B) would speak
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer24"   value="c24">
                                <label class="form-check-label"   >
                                C) will speak
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer24"   value="d24">
                                <label class="form-check-label"   >
                                D) spoke 
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!--**************************** B2 ***********************************-->
<!----------------------------- B2-1 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B2-1 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">25</th>
                    <td>____do you agree with the followig statement?

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer25"   value="a25">
                                 <label class="form-check-label"   >
                                 A) Up to
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer25"   value="b25">
                                 <label class="form-check-label"   >
                                 B) At what
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer25"   value="c25">
                                 <label class="form-check-label"   >
                                 C) To what extent
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer25"   value="d25">
                                 <label class="form-check-label"   >
                                 D) On what
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">26</th>
                    <td>____I am concerned 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer26"   value="a26">
                                <label class="form-check-label"   >
                                A) As here as
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer26"   value="b26">
                                <label class="form-check-label"   >
                                B) As far as 
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer26"   value="c26">
                                <label class="form-check-label"   >
                                C) As where as
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer26"   value="d26">
                                <label class="form-check-label"   >
                                D) As what as
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">27</th>
                    <td>"I will leave for  New York tomorrow". She said:_____ 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer27"   value="a27">
                                <label class="form-check-label"   >
                                A) She will leave
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer27"   value="b27">
                                <label class="form-check-label"   >
                                B) She leaves
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer27"   value="c27">
                                <label class="form-check-label"   >
                                C) She would leave
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer27"   value="d27">
                                <label class="form-check-label"   >
                                D) She left
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!----------------------------- B2-2 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B2-2 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">28</th>
                    <td>It  has _____ that 80% of the population is under alert     

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer28"   value="a28">
                                 <label class="form-check-label"   >
                                 A) been said
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer28"   value="b28">
                                 <label class="form-check-label"   >
                                 B) say
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer28"   value="c28">
                                 <label class="form-check-label"   >
                                 C) said
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer28"   value="d28">
                                 <label class="form-check-label"   >
                                 D) must be said
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">29</th>
                    <td>What _____by the journalists?

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer29"   value="a29">
                                <label class="form-check-label"   >
                                A) was observing
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer29"   value="b29">
                                <label class="form-check-label"   >
                                B) was observed
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer29"   value="c29">
                                <label class="form-check-label"   >
                                C) observed 
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer29"   value="d29">
                                <label class="form-check-label"   >
                                D) were observed
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">30</th>
                    <td>It had been _____ by the founders

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer30"   value="a30">
                                <label class="form-check-label"   >
                                A) carried out
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer30"   value="b30">
                                <label class="form-check-label"   >
                                B) carry out
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer30"   value="c30">
                                <label class="form-check-label"   >
                                C) carries out
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer30"   value="d30">
                                <label class="form-check-label"   >
                                D) carrying out
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!----------------------------- B2-3 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B2-3 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">31</th>
                    <td>I'm getting ..... the noise now. I found it stressful when I first moved in. 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer31"   value="a31">
                                 <label class="form-check-label"   >
                                 A) use to
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer31"   value="b31">
                                 <label class="form-check-label"   >
                                 B) uses 
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer31"   value="c31">
                                 <label class="form-check-label"   >
                                 C) used to
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer31"   value="d31">
                                 <label class="form-check-label"   >
                                 D) to use
                                 </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">32</th>
                    <td>It took my mother years to  ..... in London after moving from Pakistan.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer32"   value="a">
                                <label class="form-check-label"   >
                                A) use to live
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer32"   value="b32">
                                <label class="form-check-label"   >
                                B) getting used to live
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer32"   value="c32">
                                <label class="form-check-label"   >
                                C) used to live
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer32"   value="d32">
                                <label class="form-check-label"   >
                                D) get used to living
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">33</th>
                    <td>I _____ trying to stop drinking soda even before the doctor told me.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer33"   value="a33">
                                <label class="form-check-label"   >
                                A) would have been
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer33"   value="b33">
                                <label class="form-check-label"   >
                                B) had been
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer33"   value="c33">
                                <label class="form-check-label"   >
                                C) have been
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer33"   value="d33">
                                <label class="form-check-label"   >
                                D) would be 
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $mensaje; ?>
                        </ul>
                    </div>
                <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!----------------------------- B2-4 ------------------------------------> 

<article>

<form action="respuestas.php" method="POST">

    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> B2-4 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">34</th>
                    <td>If you had studied hard, you _____ the exam

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer34"   value="a34">
                                 <label class="form-check-label"   >
                                 A) will pass
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer34"   value="b34">
                                 <label class="form-check-label"   >
                                 B) will have to pass
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer34"   value="c34">
                                 <label class="form-check-label"   >
                                 C) would have passed
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answer34"   value="d34">
                                 <label class="form-check-label"   >
                                 D) would pass
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">35</th>
                    <td>We would have gone out if the rain ____

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer35"   value="a35">
                                <label class="form-check-label"   >
                                A) had stopped
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer35"   value="b35">
                                <label class="form-check-label"   >
                                B) would stop
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer35"   value="c35">
                                <label class="form-check-label"   >
                                C) have stopped
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer35"   value="d35">
                                <label class="form-check-label"   >
                                D) has stopped
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">36</th>
                    <td>Missing word indicates example: _____, several of the following species which have beeen recently found are endangered

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer36"   value="a36">
                                <label class="form-check-label"   >
                                A) Finally
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer36"   value="b36">
                                <label class="form-check-label"   >
                                B) Consequently
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer36"   value="c36">
                                <label class="form-check-label"   >
                                C) For instance
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer36"   value="d36">
                                <label class="form-check-label"   >
                                D) Therefore
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>
    
    <?php if (!empty($mensaje)): ?>
            <div class="error">
                <ul>
                    <?php echo $mensaje; ?>
                </ul>
            </div>
    <?php endif; ?>    

        
    <input type="submit" value="Resultado">
    
</article>

<!--**************************** C1 **********************************-->
<!----------------------------- C1-1 ------------------------------------>

<article>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><h4> C1-1 </h4></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">37</th>
                    <td>Don't put your glass of water on the ...... of the table - someone will knock it off.

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers37" value="a37">
                                 <label class="form-check-label"   >
                                 A) border
                                 </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers37" value="b37">
                                 <label class="form-check-label"   >
                                 B) boundary
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answers37" value="c37">
                                 <label class="form-check-label"   >
                                 C) extremity
                                 </label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="answers37" value="d37">
                                 <label class="form-check-label"   >
                                 D) edge
                                 </label>
                        </div>

                        </td>
                        </tr>

            <tr>
                <th scope="row">38</th>
                    <td>When I realised I had dropped my keys, I decided to ..... my steps

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers38"   value="a38">
                                <label class="form-check-label">
                                A) go back
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers38"   value="b38">
                                <label class="form-check-label">
                                B) watch
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers38"   value="c38">
                                <label class="form-check-label">
                                C) return
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers38"   value="d38">
                                <label class="form-check-label">
                                D) retrace
                                </label>
                        </div>

                    </td>
            </tr>

            <tr>
                <th scope="row">39</th>
                    <td>It is a fact rather than _____ thinking

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers39"   value="a39">
                                <label class="form-check-label">
                                A) wish
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers39"   value="b39">
                                <label class="form-check-label">
                                B) wishful
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers39"   value="c39">
                                <label class="form-check-label">
                                C) wishes
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers39"   value="d39">
                                <label class="form-check-label">
                                D) wishing
                                </label>
                        </div>

                    </td>
                </tr>


                <tr>
                <th scope="row">40</th>
                    <td>The position was set focused on____they had better academic qualifications

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers40"   value="a40">
                                <label class="form-check-label" >
                                A) Weather
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers40"   value="b40">
                                <label class="form-check-label">
                                B) Weather or not
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers40"   value="c40">
                                <label class="form-check-label">
                                C) Whether
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers40"   value="d40">
                                <label class="form-check-label">
                                D) Wether or not
                                </label>
                        </div>

                    </td>
                </tr>



                <tr>
                <th scope="row">41</th>
                    <td>The group has achieved a victory, against _____ 

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers41"   value="a41">
                                <label class="form-check-label">
                                A) all of
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers41"   value="b41">
                                <label class="form-check-label"   >
                                B) all above
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers41"   value="c41">
                                <label class="form-check-label"   >
                                C) all odds
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers41"   value="d41">
                                <label class="form-check-label"   >
                                D) all of the above
                                </label>
                        </div>

                    </td>
                </tr>



                <tr>
                <th scope="row">42</th>
                    <td>I can't ____ the thought of having to start all over

                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers42"   value="a42">
                                <label class="form-check-label">
                                A) bears
                                </label> 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers42"   value="b42">
                                <label class="form-check-label">
                                B) beared
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers42"   value="c42">
                                <label class="form-check-label">
                                C) bearing
                                </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answers42"   value="d42">
                                <label class="form-check-label">
                                D) bear
                                </label>
                        </div>

                    </td>
                </tr>
        </tbody>
    </table>       
</article>


<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

            </div>
</div>

<footer class="pie-pagina">
    <p class="footer-uaeh"></p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>