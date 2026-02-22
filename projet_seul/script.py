from json import load
from sys import argv
from os import path

# argv from sys allows to take arguments from the command line like : 'python3 script.py flush'

directory = (lambda tup=path.split(argv[0]): tup[0]+"/" if bool(tup[0]) else "./")
filename = (directory()+"userProfile.json").replace("\\", "/")

def read():
    """print the content of the file"""
    with open(filename, "r") as rf:
        print(*load(rf), sep="\n")

def flush():
    """clean the file"""
    with open(filename, "w") as wf:
        wf.write("[]")
    print(f"{filename} flushed!")

def main():
    """main function"""
    args = argv
    try:
        if len(args) == 2 and args[1].lower() == "flush":
            flush()
        else:
            read()
    except Exception as e:
        print(f"ERROR : {e}")

main()
print("END OF FILE\n")
    
