from json import load
from sys import argv
from os import path

directory = (lambda tup=path.split(argv[0]): tup[0]+"/" if bool(tup[0]) else "./")
filename = (directory()+"userProfile.json").replace("\\", "/")

print(filename)
def read():
    with open(filename, "r") as rf:
        print(*load(rf), sep="\n")

def flush():
    with open(filename, "w") as wf:
        wf.write("[]")

def main():
    args = argv
    try:
        if len(args) == 2 and args[1].lower() == "flush":
            flush()
        else:
            read()
    except Exception as e:
        print(f"ERROR : {e}")

main()
    
