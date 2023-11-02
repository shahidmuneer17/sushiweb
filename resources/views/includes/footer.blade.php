<footer class="container-fluid">
    <div class="row mt-5 text-center pmclr" style="border-top: 1px solid var(--primary-color); border-bottom: 1px solid var(--primary-color);">
        <div class="col-md-4 p-5">
            <h5>SERVICE CLIENT</h5>
            <p>Une question? Besoin d'aide concernant</p>
            <p>votre commande?</p>
            <a href="{{ route('contact') }}" role="button" class="sushibtn2">Contactez-nous</a>
        </div>
        <div class="col-md-4 p-5">
            <h5>INFORMATION</h5>
            <a href="{{ route('cgv') }}" role="button" class="sushibtn2">CGV</a><br>
            <a href="{{ route('personal-data') }}" role="button" class="sushibtn2">données personnelles</a><br>
            <a href="{{ route('legal-mentions') }}" role="button" class="sushibtn2">mentions légales</a>
        </div>
        <div class="col-md-4 p-5">
            <h5>SUIVEZ L'ACTU CENTRAL SUSHI SUR LES RESEAUX SOCIAUX</h5>
            <a href="https://www.facebook.com/centralsushidijon" class="myiconf"><!-- SVG code --></a>
            <a href="https://www.instagram.com/centralsushi/" class="myiconf"><!-- SVG code --></a>
            <a href="https://www.tiktok.com/@centralsushi" class="myiconf"><!-- SVG code --></a>
        </div>
    </div>
    <div class="text-center" style="margin-top: 10px; margin-bottom: 10px">
        <img src="{{ asset('images/logo.png') }}" style="width: 150px">
        <br>
        <p>© 2023 SUSHI</p>
    </div>
</footer>
          
        </body>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script>
      
      
      //list of restaurants
      function toggleCard() {
        var card = document.getElementById('card-list1');
        var icon = document.getElementById('icon-btn1');
        var cardlist = document.getElementById('card-list-content1');
      
        card.classList.toggle('active');
        if (card.classList.contains('active')) {
          icon.textContent = '-'; // Change icon to '-'
        } else {
          icon.textContent = '+'; // Change icon back to '+'
        }
          // Check if the element has the class 'my-class'
        if (card.classList.contains('hidden')) {
          // If it has 'my-class', remove it and add 'new-class'
          card.classList.remove('hidden');
          card.classList.add('hidden-open');
        } else {
          // If it doesn't have 'my-class', remove 'new-class' and add 'my-class'
          card.classList.remove('hidden-open');
          card.classList.add('hidden');
        }
        
      }
      function toggleCard1() {
        var card = document.getElementById('card-list2');
        var icon = document.getElementById('icon-btn2');
        var cardlist = document.getElementById('card-list-content2');
      
        card.classList.toggle('active');
        if (card.classList.contains('active')) {
          icon.textContent = '-'; // Change icon to '-'
        } else {
          icon.textContent = '+'; // Change icon back to '+'
        }
          // Check if the element has the class 'my-class'
        if (card.classList.contains('hidden')) {
          // If it has 'my-class', remove it and add 'new-class'
          card.classList.remove('hidden');
          card.classList.add('hidden-open');
        } else {
          // If it doesn't have 'my-class', remove 'new-class' and add 'my-class'
          card.classList.remove('hidden-open');
          card.classList.add('hidden');
        }
        
      }
      function toggleCard2() {
        var card = document.getElementById('card-list3');
        var icon = document.getElementById('icon-btn3');
        var cardlist = document.getElementById('card-list-content3');
      
        card.classList.toggle('active');
        if (card.classList.contains('active')) {
          icon.textContent = '-'; // Change icon to '-'
        } else {
          icon.textContent = '+'; // Change icon back to '+'
        }
          // Check if the element has the class 'my-class'
        if (card.classList.contains('hidden')) {
          // If it has 'my-class', remove it and add 'new-class'
          card.classList.remove('hidden');
          card.classList.add('hidden-open');
        } else {
          // If it doesn't have 'my-class', remove 'new-class' and add 'my-class'
          card.classList.remove('hidden-open');
          card.classList.add('hidden');
        }
        
      }
      
      </script>
      
      <style>
          
      .accordion {
          --bs-accordion-color: #E4D4BF;
          --bs-accordion-bg: transparent;
          --bs-accordion-transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,border-radius 0.15s ease;
          --bs-accordion-border-color: transparent;
          --bs-accordion-border-width: var(--bs-border-width);
          --bs-accordion-border-radius: var(--bs-border-radius);
          --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
          --bs-accordion-btn-padding-x: 1.25rem;
          --bs-accordion-btn-padding-y: 1rem;
          --bs-accordion-btn-color: #E4D4BF;
          --bs-accordion-btn-bg: transparent;
          --bs-accordion-btn-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'%3E%3C!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --%3E%3Cstyle%3Esvg%7Bfill:%23e4d48f%7D%3C/style%3E%3Cpath d='M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z'/%3E%3C/svg%3E");
          --bs-accordion-btn-icon-width: 1.25rem;
          --bs-accordion-btn-icon-transform: rotate(-180deg);
          --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
          --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'%3E%3C!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --%3E%3Cstyle%3Esvg%7Bfill:%23e4d48f%7D%3C/style%3E%3Cpath d='M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z'/%3E%3C/svg%3E");
          --bs-accordion-btn-focus-border-color: #86b7fe;
          --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          --bs-accordion-body-padding-x: 1.25rem;
          --bs-accordion-body-padding-y: 1rem;
          --bs-accordion-active-color: #E4D4BF;
          --bs-accordion-active-bg: transparent;
      }
          </style>
      </body>
      
      </html>