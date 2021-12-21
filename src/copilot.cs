string dec2bin(int dec)
{
    string bin = "";
    while (dec > 0)
    {
        bin = (dec % 2).ToString() + bin;
        dec /= 2;
    }
    return bin;
}