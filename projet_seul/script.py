from json import load

filename = "userProfile.json"
def read():
    try:
        with open(filename, "r") as rf:
            print(*load(rf), sep="\n")
    except IndexError:
        print("error")

read()