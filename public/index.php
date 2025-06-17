<?php
require "db.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RPG Página</title>
  <link rel="stylesheet" href="Home.css">
</head>
 
<body>
  <header>
    <div class="container">
      <h1>Mundo RPG</h1>
      <nav class ="nav-container">
        <a href="index.php">Home</a>
        <a href="personagens.html">Players</a>
        <a href="contatos.html">Contatos</a>
    </nav>
    </div>
  </header>

  <main class="container">
    <div class="container">
      <section id="introdução" class="hero-section">
        <h2>Bem-vindos a Saga dos Eternos</h2>
        <p>Neste RPG, você irá adentrar um mundo que parece completamente normal. Mas... será que está escondendo algo por trás da membrana?</p>
        <p>Perguntas e mais perguntas... Respostas que só serão reveladas durante a jornada deste RPG.</p>
      </section>
  
      <section id="história" class="story-section">
        <h2>Story</h2>
        <p>O ano é 2030. Após seis longos anos de guerra, a paz finalmente chegou... mas a um custo. Países desapareceram, novos surgiram, e outros viraram minorias ou maiorias. O mundo mudou para sempre.</p>
        <p>Nas ilhas de Portugal, antigos locais abandonados guardam segredos do passado. Rumores de acontecimentos estranhos e inexplicáveis começam a surgir. O que aconteceu nesses lugares? O que restou após a guerra? E o que realmente se esconde nas sombras dessas ilhas?</p>
        <p>À medida que a história se desenrola, você irá explorar esses locais e descobrir que o passado e o presente se entrelaçam de maneiras que jamais imaginou. As suas escolhas irão moldar a jornada e desvendar os mistérios de um mundo transformado.</p>        
      </section>
  </main>
  <section id="atributos" class="stats-section">
    <h2>Atributos</h2>
    <div class="atributos">
        
      <div class="stat">
        <h3>Força</h3>
        <p>Atletismo</p>
        <p>Luta</p>
      </div>
      
      <div class="stat">
        <h3>Vigor</h3>
        <p>Fortitude</p>
      </div>
      
      <div class="stat">
        <h3>Agilidade</h3>
        <p>Acrobacia+</p>
        <p>Crime*+</p>
        <p>Furtividade+</p>
        <p>Iniciativa</p>
        <p>Pilotagem*</p>
        <p>Pontaria</p>
        <p>Reflexos</p>
      </div>
      
      <div class="stat">
        <h3>Presença</h3>
        <p>Adestramento*</p>
        <p>Artes*</p>
        <p>Diplomacia</p>
        <p>Enganação</p>
        <p>Intimidação</p>
        <p>Intuição</p>
        <p>Percepção</p>
        <p>Religião*</p>
        <p>Vontade</p>
      </div>
      
      <div class="stat">
        <h3>Inteligencia</h3>
        <p>Atualidades</p>
        <p>Ciências</p>
        <p>Investigação</p>
        <p>Medicina</p>
        <p>Ocultismo</p>
        <p>Profissão*</p>
        <p>Sobrevivência</p>
        <p>Tática*</p>
        <p>Tecnologia*</p>
      </div>
      
    </div>
    <p> *Somente Treinados | +Penalidade de Carga </p>
  </section>
</div>

  <footer class="container">
    <p>&copy; 2025 Mundo RPG. Todos os direitos reservados.</p>
</footer>
</body>
</html>