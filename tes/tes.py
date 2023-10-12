import time

def happy_birthday_message():
    message = """
    _____   ____   _    _   _   _   _   _   _  
   /  ___| |  _ \ | |  | | | | | | | | | | | | 
  |  (___  | |_)  | |  | | | | | | | | | | | | 
   \___  \ |  _ < | |  | | | | | | | | | | | | 
    ___)  || |_)  | |__| | | |_| |_| |_| |_| | 
   |_____/ |____/  \____/   \____/ \____/ \____/ 
    """
    return message

def main():
    birthday_message = happy_birthday_message()
    print(birthday_message)
    time.sleep(2)
    print("\nSelamat ulang tahun! Semoga hari Anda menyenangkan!")

if __name__ == "__main__":
    main()
