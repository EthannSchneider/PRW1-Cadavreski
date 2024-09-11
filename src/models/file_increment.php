<?php

class FileIncrement
{
    public function increment_file()
    {
        file_put_contents(DATA_DIR.'db.txt', (int)file_get_contents('counter') + 1);
    }
}
