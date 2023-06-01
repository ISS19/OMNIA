function randomTxt()
{
    function generateRandomString(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678912&é"dfvghufgqygrfghrfg';
        for (var i = 0; i < length; i++) {
          var randomIndex = Math.floor(Math.random() * characters.length);
          result += characters.charAt(randomIndex);
        }
        return result;
      }
      
      // Exemple d'utilisation pour générer une chaîne de 8 caractères aléatoires :
      alert(generateRandomString(30));
      
}