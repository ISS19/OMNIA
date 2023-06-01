import re
from flask import Flask, render_template, request
import openai

# Configurez votre clé API OpenAI
openai.api_key = "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"

# Paramètres pour l'API de ChatGPT
engine = "davinci"  # Moteur à utiliser pour générer des réponses
language = "fr"
temperature = 0.5  # Niveau de créativité des réponses (entre 0 et 1)
max_tokens = 100  # Longueur maximale de chaque réponse
stop = None  # Caractère à utiliser pour arrêter la génération de texte
frequency_penalty = 0  # Niveau de répétition des mots (entre 0 et 1)
presence_penalty = 0  # Niveau de répétition des phrases (entre 0 et 1)

# Expression régulière pour filtrer les questions sur le vin
wine_regex = r"vin|vins|vinification|cépage|cuvée|millésime|dégustation|oenologie|sommelier|accord mets-vins"

# Initialisation de l'application Flask
app = Flask(__name__)

# Route pour la page d'accueil
@app.route("/")
def index():
    return render_template("index.html")

# Route pour générer une réponse
@app.route("/generate_response", methods=["POST"])
def generate_response():
    prompt = request.form["prompt"]
    try:
        # Si la requête de l'utilisateur ne concerne pas le vin, retourne une réponse vide
        if not re.search(wine_regex, prompt):
            answer = ""
        else:
            stop = "."
            response = openai.Completion.create(
                engine=engine,
                prompt=prompt,
                temperature=temperature,
                max_tokens=max_tokens,
                n=1,
                stop=stop,
                frequency_penalty=frequency_penalty,
                presence_penalty=presence_penalty
            )
            answer = response.choices[0].text.strip()
        return render_template("index.html", prompt=prompt, answer=answer)
    except Exception as e:
        error = "Une erreur s'est produite : " + str(e)
        return render_template("error.html", error=error)

if __name__ == "__main__":
    app.run(debug=True)
