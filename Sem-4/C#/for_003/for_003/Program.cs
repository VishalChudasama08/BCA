﻿using System;
namespace for_003
{
    internal class Program
    {
        static void Main(string[] args) 
        {
            int a = 1;
            for(int i=0; i < 10; i++)
            {
                Console.WriteLine(a);
                a++;
            }
            Console.ReadKey();
        }
    }
}