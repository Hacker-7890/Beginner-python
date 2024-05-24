import speech_recognition as sr
import pyttsx3
import openai

#phone
openai.api_key = "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"


model_engine = "text-davinci-003"
   
def all():
    r = sr.Recognizer()
       
    engine = pyttsx3.init()

    # Altere a velocidade da fala (o padrão é 200)
    engine.setProperty("rate", 200)

    # Altere o volume da fala (o padrão é 1.0)
    engine.setProperty("volume", 0.8)

    voices = engine.getProperty('voices')
    engine.setProperty("voice", voices[2].id)

    with sr.Microphone() as source:
        
        
        r.adjust_for_ambient_noise(source)
        text = "podes falar!"
        engine.say(text)
        engine.runAndWait()
      
       
        
        audio = r.listen(source)
              
    try:
        text = r.recognize_google(audio, language='pt-BR')
        print(text)

        completion = openai.Completion.create(
        engine=model_engine,
        prompt=text,
        max_tokens=1024,
        n=1,
        stop=None,
        temperature=0.5,
        )

        response = completion.choices[0].text
        

        engine.say(response)
        engine.runAndWait()
    except sr.UnknownValueError:
            print(9)
while True:
    all()