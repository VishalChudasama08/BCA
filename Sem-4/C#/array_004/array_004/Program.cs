using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Threading;
using System.Threading.Tasks;

namespace array_004 // Note: actual namespace depends on the project name.
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            int a  = 0;
            int b = 1;
            for (int i = 0; i < 10; i++)
            {
                for (int j = 0; j < 10; j++)
                {
                    ++a;
                    Console.Write(a + " " + b + " " + (a * b) + "\t");
                }
                Console.WriteLine();
                a = 0;
                b++;
            }
            Console.ReadKey();
        }
    }
}