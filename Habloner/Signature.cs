using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Text;
using System.Security.Cryptography;


namespace Habloner
{
    public static class Signature
    {
        public static string GetSign(string s)
        {
            //шифровка подписи
            MD5CryptoServiceProvider provider = new MD5CryptoServiceProvider();
            byte[] hash = provider.ComputeHash(Encoding.Default.GetBytes(s));
            return BitConverter.ToString(hash).ToLower().Replace(" - ", "");

        }
    }
} 