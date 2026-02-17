from json import load

filename = "projet_seul/userProfile.json"
def read():
    try:
        with open(filename, "r") as rf:
            print([f"{key} : {value}" for key, value in load(rf)], sep="\n")
    except IndexError:
        print("error")

read()