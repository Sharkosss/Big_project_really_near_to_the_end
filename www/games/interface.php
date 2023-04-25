<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Invite de commande</title>
  <link rel="stylesheet" href="../css/inferface.css">
  <script src="../js/interface.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.11.2/brython.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.11.2/brython_stdlib.min.js">
  </script>
</head>
<body onload="brython()">
  
  <div class="container">
    
    
    <div class="input-container">
        <label for="input1">C:\></label>
        <input type="text" id="input1" placeholder="Entrez une commande..." style = "color: #FFF;" onkeydown="checkCommand(event)">
      <!-- <button id="button">Exécuter</button> faire une fonction js qui fait croire que le bouton c'est entrée-->
    </div>
    
    <div id="output" class="output">
        <div id="result"></div>
        <script type="text/python">
            from browser import document, window, bind
            import random

            @bind(document, "keydown")
            def keyDownHandler(e):
              if e.keyCode == 13:
                  deviner()

           
            results = []
            nombre_secret = random.randint(1, 100)
            nombre_essais = 0


            def deviner():
                input1 = document.getElementById("input1")
                result = input1.value
                
                if len(results) == 25:
                  results.pop()

                global nombre_essais
                nombre_essais += 1

                if not result.isdigit():
                    # Vous avez inversé les arguments de la méthode insert()
                    play = "Veuillez entrer une valeur correct"
                    results.insert(0, play)
                    all_results = "<br>".join(results)
                    document.getElementById("result").innerHTML = all_results
                    
                elif result.isdigit():
                    # Vous avez utilisé une variable inexistante ici (input_nombre au lieu de result)
                    input_nombre = int(result)
                    if input_nombre == nombre_secret:
                        # Vous avez utilisé un identifiant de div inexistant ici (document["resultat"].text)
                        results.insert(0, f"Félicitations, vous avez trouvé le nombre en {nombre_essais} essais !")
                        all_results = "<br>".join(results)
                        document.getElementById("result").innerHTML = all_results
                    elif input_nombre < nombre_secret:
                        results.insert(0, "Le nombre est plus grand")
                        all_results = "<br>".join(results)
                        document.getElementById("result").innerHTML = all_results
                    else:
                        results.insert(0, "Le nombre est plus petit")
                        all_results = "<br>".join(results)
                        document.getElementById("result").innerHTML = all_results
                else:
                    results.insert(0, result)
                    all_results = "<br>".join(results)
                    document.getElementById("result").innerHTML = all_results
                
                
                input1.value = ""  # nettoyer l'input
        </script>
    </div>
  </div
