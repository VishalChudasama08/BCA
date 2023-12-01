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
            int[] b = new int[10];
            b = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            for (int i = 0; i < 10; i++)
            {
                for (int j = 0; j < 10; j++)
                {
                    a = a + 1;
                    Console.Write(a + " " + b[i] + " " + (a * b[i]) + "\t");
                }
                Console.WriteLine();
                a = 0;
            }
            Console.ReadKey();
        }
    }
}