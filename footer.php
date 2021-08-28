</div>
    </section>
    
    <footer class="footer">

    </footer>
  </div>
  
   
  <script src="../../JS/action.js"></script>
  <script>
    function characters_function(e){
  let l=document.getElementsByClassName("main__menu__items__one");
  for(let i=0;i<l.length;i++){
    l[i].classList.remove("main__menu__items__one__active");
  }
  e.classList.toggle("main__menu__items__one__active");
}

  </script>
</body>
</html>