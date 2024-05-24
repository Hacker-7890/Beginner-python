import pyttsx3

engine = pyttsx3.init()

# Altere a velocidade da fala (o padrão é 200)
engine.setProperty("rate", 150)

# Altere o volume da fala (o padrão é 1.0)
engine.setProperty("volume", 0.8)

text = "Você está no Viva o Linux!"
engine.say(text)
engine.runAndWait()



# Obtenha a lista de vozes disponíveis e selecione uma
voices = engine.getProperty("voices")
for voice in voices:
    print(voice)

# Defina a voz para "brazil"
engine.setProperty("voice", "brazil")


res=response.find(".")
        res2=response[0:res]