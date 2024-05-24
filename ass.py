import openai

openai.api_key = "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"
model_engine = "text-davinci-003"
while True:
    
    prompt = str(input("escreva oque prescisas: "))

    completion = openai.Completion.create(
     engine=model_engine,
     prompt=prompt,
     max_tokens=1024,
     n=1,
     stop=None,
     temperature=0.5,
    )

    response = completion.choices[0].text
    print(response)